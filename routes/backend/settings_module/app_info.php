<?php

use App\Http\Controllers\Backend\SettingsModule\AppInfoController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'app_info'], function(){

    //index
    Route::get("/",[AppInfoController::class,"index"])->name("app.info.index");

    //update
    Route::post("/update/{id}",[AppInfoController::class,"update"])->name("app.info.update");

});
