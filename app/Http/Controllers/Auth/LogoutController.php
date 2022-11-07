<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //index function
    public function index() {
        if (auth('web')->check()) {
            Auth::logout();
        }
        return redirect()->route('login.index');
    }
}
