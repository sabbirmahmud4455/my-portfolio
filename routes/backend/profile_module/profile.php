<?php

use App\Http\Controllers\Backend\ProfileModule\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'profile'], function () {
    // index
    Route::get('/{id}/{email}', [ProfileController::class, 'index'])->name('profile.index');

    // update profile
    Route::post('update/{id}/{email}', [ProfileController::class, 'update_profile'])->name('profile.update');

    // update email
    Route::post('email-update/{id}/{email}', [ProfileController::class, 'update_email'])->name('profile.email.update');

    // update password
    Route::post('password-update/{id}/{email}', [ProfileController::class, 'update_password'])->name('profile.password.update');


});
