<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index function
    public function index() {
        if (auth('web')->check()) {
            return view('backend.dashboard');
        } else {
            return view('errors.404');
        }
    }


}
