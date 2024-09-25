<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\studentController as AdminStudentStudentController;
use App\Http\Controllers\auth;
use App\Http\Controllers\Enrollment\EnrollmentController;
use App\Http\Controllers\index;
use App\Http\Controllers\courses\courseController;
use App\Http\Controllers\Student\studentController as StudentController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
  Route::controller(AdminStudentStudentController::class)->group(function () {
    Route::get('/', AdminHomeController::class);
    Route::prefix('students')->group(function () {
      Route::get('/', 'index');
      Route::get('edit/{id}', 'edit')->where('id', '[0-9]+');
      Route::get('show/{id}', 'show')->where('id', '[0-9]+');
      Route::get('delete/{id}', 'edit')->where('id', '[0-9]+');
    });
  });
});


Route::prefix('student')->group(function () {
  Route::controller(StudentController::class)->group(function () {
    Route::get('/', );
    Route::prefix('students')->group(function () {
      Route::get('/', 'index');
    });
  });
});


Route::get('createcourse', function () {
  return view('instructor.create-course');
});


Route::get('/', HomeController::class);
Route::get('/login', [auth::class, 'showingLoginForm']);
Route::get('forgotpassword', [auth::class, 'forgotPassword']);
Route::get('/register', [auth::class, 'register']);
Route::post('/register', [auth::class, 'store']);
Route::get('/logout', HomeController::class);
Route::post('/logout', [auth::class, 'destroy']);
Route::post('/login', [auth::class, 'login']);
Route::get('/profile', [auth::class, 'showProfile']);
Route::post('/profile', [auth::class, 'updateProfile'])->name('updateProfile');


Route::prefix('courses')->group(function () {
  Route::controller(courseController::class)->name('courses')->group(function () {
    Route::get('/', 'index')->name('');
    Route::get('/courseDetails/{id}', 'show')->name('.courseDetails');
  });
  Route::post('/courseDetails/{id}', [EnrollmentController::class, 'store'])->name('courseEnroll');
  Route::delete('/courseDetails/{id}', [EnrollmentController::class, 'destroy'])->name('courseUnEnroll');
});