<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;


// login route start
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login-check', [LoginController::class, 'login_check'])->name('login.check');
// login route end

// logout route start
Route::post('/logout',[LogoutController::class, 'index'])->name('logout.index');
// logout route end

// forget password route start
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot.password.index');
Route::post('/forgot-password/email', [ForgotPasswordController::class, 'passwordResetEmail'])->name('forgot.password.reset.email');
Route::get('/reset-password/{token}/{email}', [ForgotPasswordController::class, 'passwordReset'])->name('password.reset');
Route::post('/reset-update/{token}/{email}', [ForgotPasswordController::class, 'passwordUpdate'])->name('password.update');
// forget password route end


// backend route group start
Route::group(['prefix' => 'admindashboard', 'middleware' => ['auth']], function () {

    // Dashboard Route
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    // user module route start
    Route::group(['prefix' => 'user_module'], function () {
        require_once 'user_module/role.php';
        require_once 'user_module/user.php';
    });
    // user module route end

    // profile module route start
    Route::group(['prefix' => 'profile_module'], function () {
        require_once 'profile_module/profile.php';
    });
    // profile module route end

    // settings module route start
    Route::group(['prefix' => 'settings_module'], function () {
        require_once 'settings_module/app_info.php';
    });
    // settings module route end



});
// backend route group end
