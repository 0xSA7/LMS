<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\auth;
use App\Http\Controllers\Enrollment\EnrollmentController;
use App\Http\Controllers\index;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin')->group(function () {
  Route::get('/', AdminHomeController::class);
  Route::prefix('students')->name('.students')->controller(AdminStudentController::class)->group(function () {
    Route::get('/', 'index')->name('.index');
    Route::get('show/{id}', 'show')->where('id', '[0-9]+')->name('.show');
    Route::get('edit/{id}', 'edit')->where('id', '[0-9]+')->name('.edit');
    Route::put('edit/{id}', 'edit')->where('id', '[0-9]+')->name('.edit');
    Route::delete('delete/{id}', 'destroy')->where('id', '[0-9]+')->name('.destroy');
  });
});


Route::prefix('student')->name('student')->group(function () {
  Route::get('/', );
  Route::get('/', [StudentController::class, 'index']);
  Route::controller(StudentController::class)->group(function () {
    Route::prefix('courses')->group(function () {
      Route::get('/', 'index');
    });
  });
});


Route::get('createcourse', function () {
  return view('instructor.create-course');
});


Route::get('/', [index::class, 'index']);
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
  Route::controller(CourseController::class)->group(function () {
    Route::get('/', 'index')->name('courses');
    Route::get('/coursedetails/{id}', 'show')->name('coursedetails');
    // Route::post('/coursedetails/{id}','enroll')->name('courseEnroll');
  });
  Route::post('/coursedetails/{id}', [EnrollmentController::class, 'store'])->name('courseEnroll');
});