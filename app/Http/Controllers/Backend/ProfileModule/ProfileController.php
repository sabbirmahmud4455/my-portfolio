<?php

namespace App\Http\Controllers\Backend\ProfileModule;

use App\Http\Controllers\Controller;
use App\Models\UserModule\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    //index
    public function index($id, $email) {
        if (auth('web')->check()) {
            $user = User::with('role')->where('id', decrypt($id))->where('email', decrypt($email))->first();
            if ($user) {
                return view('backend.modules.profile_module.profile.index', compact('user'));
            }
        } else {
            return view('errors.404');
        }
    }

    //update profile
    public function update_profile(Request $request, $id, $email) {
        if (auth('web')->check()) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required|regex:/^(01)[0-9]{9}$/',
            ]);
            $user = User::with('role')->where('id', decrypt($id))->where('email', decrypt($email))->first();
            if ($user) {
                try {
                    $user->name = $request->name;
                    $user->phone = $request->phone;

                    if ($request->image) {
                        if ($user->image != null && file_exists('images/profile/'.$user->image)) {
                            unlink('images/profile/'.$user->image);
                        }
                        $image = $request->file('image');
                        $file_name = time().Str::random(12).'.'.$image->getClientOriginalExtension();
                        $image->move(public_path('images/profile/'), $file_name);
                        $user->image = $file_name;
                    }

                    if ($user->save()) {
                        $profile_route = route('profile.index', ['id' => encrypt($user->id), 'email' => encrypt($user->email)]);
                        return response()->json(['profile_update' => $profile_route], 200);
                    }

                } catch (\Exception $e) {
                    return response()->json(['error' => $e->getMessage()], 200);
                }
            }
        } else {
            return view('errors.404');
        }
    }

    //update email
    public function update_email(Request $request, $id, $email) {
        if (auth('web')->check()) {
            $request->validate([
                'email' => 'required|unique:users,email,'.decrypt($id),
                'password' => 'required',
            ]);
            $user = User::with('role')->where('id', decrypt($id))->where('email', decrypt($email))->first();
            if ($user) {
                try {
                    if (Hash::check($request->password, $user->password)) {
                        $user->email = $request->email;

                        if ($user->save()) {
                            $profile_route = route('profile.index', ['id' => encrypt($user->id), 'email' => encrypt($user->email)]);
                            return response()->json(['profile_update' => $profile_route], 200);
                        }
                    } else {
                        return response()->json(['error' => 'Password did not Match'], 200);
                    }


                } catch (\Exception $e) {
                    return response()->json(['error' => $e->getMessage()], 200);
                }
            }
        } else {
            return view('errors.404');
        }
    }

    //update password
    public function update_password(Request $request, $id, $email) {
        if (auth('web')->check()) {
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|confirmed|min:6|max:20',
            ]);
            $user = User::with('role')->where('id', decrypt($id))->where('email', decrypt($email))->first();
            if ($user) {
                try {

                    if (Hash::check($request->current_password, $user->password)) {
                        $user->password = Hash::make($request->password);
                        if ($user->save()) {
                            $profile_route = route('profile.index', ['id' => encrypt($user->id), 'email' => encrypt($user->email)]);
                            return response()->json(['profile_update' => $profile_route], 200);
                        }
                    } else {
                        return response()->json(['error' => 'Current Password did not Match'], 200);
                    }



                } catch (\Exception $e) {
                    return response()->json(['error' => $e->getMessage()], 200);
                }
            }
        } else {
            return view('errors.404');
        }
    }



}
