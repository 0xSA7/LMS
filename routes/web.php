<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\studentController;
use App\Http\Controllers\auth;
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

Route::prefix('admin')->group(function(){
    Route::controller(studentController::class)->group(function(){
        Route::get('/',HomeController::class);
        Route::prefix('students')->group(function(){
            Route::get('/','index') ;
            Route::get('edit/{id}','edit')->where('id','[0-9]+');
            Route::get('show/{id}','show')->where('id','[0-9]+');
            Route::get('delete/{id}','edit')->where('id','[0-9]+');
        });
    });
});
Route::get('/',[auth::class , 'index']);
Route::get('forgotpassword',[auth::class , 'forgotPassword']);
Route::get('/register', [auth::class , 'register']);
Route::post('/register', [auth::class , 'store']);

