<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\studentController as AdminStudentStudentController;
use App\Http\Controllers\auth;
use App\Http\Controllers\index;
use App\Http\Controllers\courses\courseController;
use App\Http\Controllers\Student\studentController as StudentController;
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
    Route::controller(AdminStudentStudentController::class)->group(function(){
        Route::get('/',HomeController::class);
        Route::prefix('students')->group(function(){
            Route::get('/','index') ;
            Route::get('edit/{id}','edit')->where('id','[0-9]+');
            Route::get('show/{id}','show')->where('id','[0-9]+');
            Route::get('delete/{id}','edit')->where('id','[0-9]+');
        });
    });
});

Route::get('createcourse',function(){
   return view('instructor.create-course');
});
Route::get('/',[index::class , 'index']);
Route::get('/login',[auth::class , 'showingLoginForm']);
Route::get('forgotpassword',[auth::class , 'forgotPassword']);
Route::get('/register', [auth::class , 'register']);
Route::post('/register', [auth::class , 'store']);
Route::get('/student',[StudentController::class, 'index']);
Route::post('/logout', [auth::class , 'destroy']);
Route::post('/login', [auth::class , 'login']);
Route::get('/profile',[auth::class,'showProfile']);
Route::post('/profile',[auth::class,'updateProfile'])->name('updateProfile');


Route::prefix('courses')->group(function(){
    Route::controller(courseController::class)->group(function(){
        Route::get('/','index')->name('courses');
        Route::get('/coursedetails/{id}','show')->name('coursedetails');
        Route::post('/coursedetails/{id}','enroll')->name('courseEnroll');
    });

 
});