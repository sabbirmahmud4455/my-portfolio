<?php

namespace App\Http\Controllers\Backend\UserModule\Role;

use App\Http\Controllers\Controller;
use App\Models\UserModule\Module;
use App\Models\UserModule\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    //index
    public function index() {
        if (can('roles')) {
            return view('backend.modules.user_module.role.index');
        } else {
            return view('errors.404');
        }
    }

    //data
    public function data() {
        if (can('roles')) {
            $role = Role::where('id', '!=', 1)->select('id', 'name', 'is_active', 'is_delete')->get();
            return DataTables::of($role)
                ->addIndexColumn()
                ->rawColumns(['is_active', 'action'])
                ->editColumn('is_active', function (Role $role) {
                    if ($role->is_active == true) {
                        return '<p class="badge badge-success">Active</p>';
                    } else {
                        return '<p class="badge badge-danger">Inactive</p>';
                    }
                })
                ->addColumn('action', function (Role $role) {
                    return ( can("edit_role") ?
                            ' <a href="'.route('role.edit.page', ['id' => encrypt($role->id)]).'"  class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                            ': '');
                })
                ->make(true);
        } else {
            return view('errors.404');
        }
    }

    // add page
    public function add_page() {
        if (can('add_role')) {
            $modules = Module::with('permission')->get();
            return view('backend.modules.user_module.role.add', compact('modules'));
        } else {
            return view('errors.404');
        }
    }

    // add
    public function add(Request $request) {
        if (can('add_role')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:roles,name',
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                DB::beginTransaction();
                try{
                    if ($request['permission']) {
                        $role = new Role();
                        $role->name = $request->name;
                        $role->is_active = true;
                        $role->is_delete = false;
                        if($role->save()) {
                            foreach($request['permission'] as $permission) {
                                $role->permission()->attach($permission);
                            }
                            DB::commit();
                            return response()->json(['success' => 'Role Created Successfully'], 200);
                        }
                    } else {
                        return response()->json(['warning' => 'Please choose user permission'], 200);
                    }
                } catch(Exception $e) {
                    DB::rollBack();
                    return response()->json(['error' => $e->getMessage()], 200);
                }
            }
        } else {
            return view('errors.404');
        }
    }

    // edit page
    public function edit_page($id) {
        if (can('edit_role')) {
            $modules = Module::with('permission')->get();
            $role = Role::with('permission')->findOrFail(decrypt($id));
            return view('backend.modules.user_module.role.edit', compact('modules', 'role'));
        } else {
            return view('errors.404');
        }

    }

    // add
    public function edit(Request $request, $id) {
        if (can('edit_role')) {
            $id = decrypt($id);
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:roles,name,'. $id,
                'is_active' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                DB::beginTransaction();
                try{
                    if ($request['permission']) {
                        $role = Role::findOrFail($id);
                        $role->name = $request->name;
                        $role->is_active = $request->is_active;
                        $role->is_delete = false;
                        if($role->save()) {
                            $role->permission()->detach();
                            foreach($request['permission'] as $permission) {
                                $role->permission()->attach($permission);
                            }
                            DB::commit();
                            return response()->json(['success' => 'Role Updated Successfully'], 200);
                        }
                    } else {
                        return response()->json(['warning' => 'Please choose user permission'], 200);
                    }
                } catch(Exception $e) {
                    DB::rollBack();
                    return response()->json(['error' => $e->getMessage()], 200);
                }
            }
        } else {
            return view('errors.404');
        }
    }

}
