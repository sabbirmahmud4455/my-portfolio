<?php

namespace App\Http\Controllers\Backend\UserModule\User;

use App\Http\Controllers\Controller;
use App\Models\UserModule\Role;
use App\Models\UserModule\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    //index
    public function index() {
        if (can('all_user')) {
            return view('backend.modules.user_module.user.index');
        } else {
            return view('errors.404');
        }
    }

    //data
    public function data() {
        if (can('all_user')) {
            if (auth('web')->check()) {
                $user = User::with('role')
                    ->where('id', '!=', auth('web')->user()->id)
                    ->where('is_super_admin', false)
                    ->where('id', '!=', 1)->get();
            }
            return DataTables::of($user)
                ->addIndexColumn()
                ->rawColumns(['name', 'is_active', 'action', 'role_id'])
                ->editColumn('name', function (User $user) {
                    if ($user->image == null) {
                        $src = asset('images/profile/user.png');
                    } else {
                        $src = asset("images/profile/.$user->image");
                    }
                    return "
                        <img src='$src' width='50px' style='border-radius: 100%'>
                        <p><b>Name : </b> $user->name </p>
                        <p><b>Email : </b> $user->email </p>
                        <p><b>Phone : </b> $user->phone </p>
                    ";
                })
                ->editColumn('is_active', function (User $user) {
                    if ($user->is_active == true) {
                        return '<p class="badge badge-success">Active</p>';
                    } else {
                        return '<p class="badge badge-danger">Inactive</p>';
                    }
                })
                ->editColumn('role_id', function (User $user) {
                    return $user->role->name;
                })
                ->addColumn('action', function (User $user) {
                    return '<div class="dropdown">
                                <button type="button" id="dropdown'.$user->id.'" class="btn btn-light btn-active-light-primary btn-sm dropdown-loggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu-->
                                <div class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-auto py-4" aria-labelledby="dropdown'.$user->id.'">
                                    <!--begin::Menu item-->
                                    '.( can('edit_user') ? '
                                    <div class="menu-item px-3">
                                        <a href="" data-content="'.route('user.edit.modal', ['id' => $user->id]).'" data-bs-toggle="modal" data-bs-target="#myModal" class="menu-link px-3">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                        </a>
                                    </div>
                                    ': '') .'
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    '.( can('reset_password') ?'
                                    <div class="menu-item px-3">
                                        <a href="" data-content="'.route('user.reset.password.modal', ['id' => $user->id]).'"  data-bs-toggle="modal" data-bs-target="#myModal" class="menu-link px-3">
                                        <i class="fas fa-key"></i>
                                        Reset Password
                                        </a>
                                    </div>
                                    ' : '') .'
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>';
                })
                ->make(true);
        } else {
            return view('errors.404');
        }
    }

    // add modal
    public function add_modal() {
        if (can('add_user')) {
            $roles = Role::where('id', '!=', 1)->where('is_active', true)->where('is_delete', false)->get();
            return view('backend.modules.user_module.user.modals.add', compact('roles'));
        } else {
            return view('errors.404');
        }
    }

    // add
    public function add(Request $request) {
        if (can('add_user')) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required|regex:/^(01)[0-9]{9}$/',
                'email' => 'required|unique:users,email',
                'role_id' => 'required|numeric',
                'password' => 'required|confirmed',
            ]);
            try {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->password = Hash::make($request->password);
                $user->role_id = $request->role_id;
                $user->is_super_admin = false;
                $user->is_active = true;
                $user->is_delete = false;

                if ($user->save()) {
                    return response()->json(['success' => 'User Created Successfully'], 200);
                }

            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 200);
            }
        } else {
            return view('errors.404');
        }
    }

    // add modal
    public function edit_modal($id) {
        if (can('edit_user')) {
            $user = User::findOrFail($id);
            $roles = Role::where('id', '!=', 1)->where('is_active', true)->where('is_delete', false)->get();
            return view('backend.modules.user_module.user.modals.edit', compact('user', 'roles'));
        } else {
            return view('errors.404');
        }
    }

    // edit
    public function edit(Request $request, $id) {
        if (can('edit_user')) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required|regex:/^(01)[0-9]{9}$/',
                'email' => 'required|unique:users,email,'.$id,
                'role_id' => 'required|numeric',
                'is_active' => 'required',
            ]);
            try {
                $user = User::findOrFail($id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->role_id = $request->role_id;
                $user->is_super_admin = false;
                $user->is_active = $request->is_active;
                $user->is_delete = false;

                if ($user->save()) {
                    return response()->json(['success' => 'User Updated Successfully'], 200);
                }

            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 200);
            }
        } else {
            return view('errors.404');
        }
    }

    // reset password modal
    public function reset_password_modal($id) {
        if (can('reset_password')) {
            $user = User::findOrFail($id);
            return view('backend.modules.user_module.user.modals.reset_password', compact('user'));
        }
    }

    // reset password
    public function reset_password(Request $request, $id) {
        if (can('reset_password')) {
            $request->validate([
                'password' => 'required|confirmed'
            ]);
            try {
                $user = User::findOrFail($id);
                $user->password = Hash::make($request->password);

                if ($user->save()) {
                    return response()->json(['success' => 'Password Reset Successfully'], 200);
                }

            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 200);
            }
        } else {
            return view('errors.404');
        }
    }


}
