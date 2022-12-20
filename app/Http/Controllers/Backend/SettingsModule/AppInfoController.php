<?php

namespace App\Http\Controllers\Backend\SettingsModule;

use App\Http\Controllers\Controller;
use App\Models\SettingsModule\AppInfo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AppInfoController extends Controller
{

    //index
    public function index(){
        if( can("app_info") ){
            $app_info = AppInfo::select('id', 'title', 'description', 'logo', 'favicon', 'url')->where('is_active', true)->where('is_delete', false)->first();
            return view('backend.modules.settings_module.app_info.index', compact('app_info'));
        }
        else{
            return view('errors.404');
        }
    }

    //update
    public function update(Request $request, $id){
        if( can("edit_app_info") ){
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'url' => 'required',
                'description' => 'required',
            ]);

            if( $validator->fails() ){
                return response()->json(['errors' => $validator->errors()], 422);
            }else {
                try {
                    $app_info = AppInfo::findOrFail(decrypt($id));

                    $app_info->title = $request->title;
                    $app_info->description = $request->description;
                    $app_info->url = $request->url;

                    if ($request->logo) {
                        if ($app_info->logo != null && file_exists('images/info/'.$app_info->logo)) {
                            unlink('images/info/'.$app_info->logo);
                        }
                        $image = $request->file('logo');
                        $file_name = time() . Str::random(12) . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('images/info/'), $file_name);
                        $app_info->logo = $file_name;
                    }

                    if ($request->favicon) {
                        if ($app_info->favicon != null && file_exists('images/info/' . $app_info->favicon)) {
                            unlink('images/info/' . $app_info->favicon);
                        }
                        $image = $request->file('favicon');
                        $file_name = time() . Str::random(12) . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('images/info/'), $file_name);
                        $app_info->favicon = $file_name;
                    }

                    if ($app_info->save()) {
                        return response()->json(['success' => 'App Info Updated'], 200);
                    }

                } catch (Exception $e) {
                    return response()->json(['error' => $e->getMessage()], 200);
                }
            }
        }
        else{
            return response()->json(['warning' => 'Unauthorized request'], 200);
        }
    }


}
