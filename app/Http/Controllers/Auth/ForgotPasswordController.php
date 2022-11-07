<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserModule\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    //index function
    public function index() {
        return view('auth.forget_password');
    }


    // password reset email function
    public function passwordResetEmail(Request $request) {
        $request->validate([
           'email' => 'required',
        ]);

        try {
            if ( User::where('email', $request->email)->first() ) {
                $token = Str::random(60);
                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
                $email = $request->email;
                Mail::send('auth.emails.reset_email', ['token' => $token, 'email' => $email], function ($message) use($request) {
                    $message->from('rkmahbub@gmail.com');
                    $message->to($request->email);
                    $message->subject('Reset your password');
                });
                return response()->json(['success' => 'We send you a password reset link in your given address'], 200);
            } else {
                return response()->json(['error' => 'Invalid Email Address']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 200);
        }
    }


    // password reset function
    public function passwordReset(Request $request, $token, $email) {
        $password_data = DB::table('password_resets')->where('token', $token)->where('email', decrypt($email))->first();

        if ($password_data && Carbon::now()->subMinutes(10) < $password_data->created_at) {
            return view('auth.reset_password', compact('token', 'email'));
        } else {
            return redirect()->route('forgot.password.index')->with('failed', 'Invalid Password Reset Link or link Expired. Please send reset password link again');
        }
    }

    // password update function
    public function passwordUpdate(Request $request, $token, $email) {
        try {
            $password_data = DB::table('password_resets')->where('token', $token)->where('email', decrypt($email))->first();
            $login = route('login.index');
            if ($password_data && Carbon::now()->subMinutes(10) < $password_data->created_at) {
                $request->validate([
                    'password' => 'required|confirmed|min:6|max:20'
                ]);
                if ($user = User::where('email', $password_data->email)->where('is_active', true)->where('is_delete', false)
                    ->whereHas('role', function ($query) {
                        $query->where('is_active', true)->where('is_delete', false);
                    })->first()) {
                    $user->password = Hash::make($request->password);
                    if ($user->save()) {
                        Auth::logout();
                        return response()->json(['password_reset' => $login], 200);
                    }
                } else {
                    return response()->json(['error' => 'Your Account is temporary disabled. Please contact with system administrator' ], 200);
                }
            } else {
                return redirect()->route('forgot.password.index')->with('failed', 'Invalid Password Reset Link or link Expired. Please send reset password link again');
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 200);
        }
    }

}
