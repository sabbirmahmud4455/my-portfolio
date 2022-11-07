<?php

use App\Http\Controllers\Backend\UserModule\Role\RoleController;
use Illuminate\Support\Facades\Route;

//role route start
Route::group(['prefix' => 'role'], function () {

    // index route
    Route::get('/', [RoleController::class, 'index'])->name('role.index');

    // data route
    Route::get('/data', [RoleController::class, 'data'])->name('role.data');

    // add page route
    Route::get('/add', [RoleController::class, 'add_page'])->name('role.add.page');

    // add route
    Route::post('/add', [RoleController::class, 'add'])->name('role.add');

    // add page route
    Route::get('/edit/{id}', [RoleController::class, 'edit_page'])->name('role.edit.page');

    // edit route
    Route::post('/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');

});
//role route start
