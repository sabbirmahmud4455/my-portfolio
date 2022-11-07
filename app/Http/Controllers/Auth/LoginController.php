<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserModule\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //index function
    public function index() {
        if (auth('web')->check()) {
            return redirect()->route('dashboard');
        } else {
        return view('auth.login');
        }
    }

    // login check function
    public function login_check(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        try {
            $user = User::where("is_active",true)->where('is_delete', false)->where('email',$request->email)->first();
            if( $user ){
                if (auth('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                    $dashboard = route('dashboard');
                    if( auth('web')->user()->is_active == true && auth('web')->user()->is_delete == false && auth('web')->user()->role->is_active == true && auth('web')->user()->role->is_delete == false ){
                        return response()->json(['login' => $dashboard ], 200);
                    }
                    else{
                        Auth::logout();
                        return response()->json(['error' => 'Your Account is temporary disabled. Please contact with system administrator' ], 200);
                    }

                } else {
                    return response()->json(['error' => 'Invalid Credentials' ], 200);
                }
            }
            else{
                return response()->json(['error' => 'Invalid Credentials' ], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 200);
        }


    }


}
