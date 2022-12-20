<?php

use App\Http\Controllers\Backend\UserModule\User\UserController;
use Illuminate\Support\Facades\Route;

//user route start
Route::group(['prefix' => 'user'], function () {

    // index route
    Route::get('/', [UserController::class, 'index'])->name('user.index');

    // add modal route
    Route::get('/add', [UserController::class, 'add_modal'])->name('user.add.modal');

    // add route
    Route::post('/add', [UserController::class, 'add'])->name('user.add');

    // data route
    Route::get('/data', [UserController::class, 'data'])->name('user.data');

    // edit modal route
    Route::get('/edit/{id}', [UserController::class, 'edit_modal'])->name('user.edit.modal');

    // edit route
    Route::post('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

    // reset password modal route
    Route::get('/reset-password/{id}', [UserController::class, 'reset_password_modal'])->name('user.reset.password.modal');

    // reset password route
    Route::post('/reset-password/{id}', [UserController::class, 'reset_password'])->name('user.reset.password');

});
//user route start
