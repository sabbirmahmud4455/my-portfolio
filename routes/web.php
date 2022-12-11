<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/sent-message', [HomeController::class, 'sent_message'])->name('sent_message');

//live server command route start
Route::get('/clear', function(){
    Artisan::call("optimize:clear");
    return "success";
});
//live server command route end

//live Database command route start
Route::get('/db', function(){
    //Artisan::call("migrate");
    Artisan::call("db:seed");
    return "success";
});
//live Database command route end

//live Database reset command route start
Route::get('/close-our-software-by-devloper', function(){
    Artisan::call("migrate:reset");
    return "success";
});
//live Database reset command route end


// app shutdown
/* Route::get('/site/shutdown/by/dev/unt', function(){
Artisan::call('down');
return redirect()->back();
}); */



/*
|-------------------------------------------------------------------------------
| Backend Route Start
|-------------------------------------------------------------------------------
*/
require_once 'backend/web.php';
/*
|-------------------------------------------------------------------------------
| Backend Route Start
|-------------------------------------------------------------------------------
*/

