<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\InstructorController as AdminInstructorController;
use App\Http\Controllers\Admin\studentController as AdminStudentController;
use App\Http\Controllers\auth;
use App\Http\Controllers\courses\courseController;
use App\Http\Controllers\Enrollment\EnrollmentController;
use App\Http\Controllers\Instructor\CourseController as InstructorCourseController;
use Illuminate\Support\Facades\Route;


// global routes
Route::get('/', HomeController::class);
Route::get('/logout', HomeController::class);
Route::get('/dashboard', function () {
  return view('layouts.dashboard');
});
Route::prefix('courses')->group(function () {
  Route::controller(courseController::class)->name('courses')->group(function () {
    Route::get('/', 'index')->name('');
    Route::get('/courseDetails/{id}', 'show')->name('.courseDetails');
  });
  Route::post('/courseDetails/{id}', [EnrollmentController::class, 'store'])->name('courseEnroll');
  Route::delete('/courseDetails/{id}', [EnrollmentController::class, 'destroy'])->name('courseUnEnroll');
});


// auth users routes
Route::controller(auth::class)->group(function () {
  Route::prefix('/register')->name('reg')->group(function () {
    Route::get('', 'showRegisterForm')->name('.show');
    Route::post('', 'store')->name('.add');
  });
  Route::prefix('/login')->name('login')->group(function () {
    Route::get('', 'showLoginForm')->name('.show');
    Route::post('', 'login')->name('.add');
  });
  Route::prefix('/forgotpass')->name('forgotPass')->group(function () {
    Route::get('', 'showForgotPassForm')->name('.show');
  });
  Route::post('/logout', 'logout');
  Route::get('/profile', 'showProfile');
  Route::get('/profile/update', 'showUpdateProfile')->name('updateProfile');
  Route::put('/profile/update', 'updateProfile')->name('updateProfile');
  Route::get('/profile/password', 'showUpdatePassForm')->name('updatePass');
  Route::put('/profile/password', 'updatePass')->name('updatePass');
  Route::get('/profile/email', 'showUpdateEmailForm')->name('updateEmail');
  Route::put('/profile/email', 'updateEmail')->name('updateEmail');
});


// admin routes
Route::prefix('admin')->name('admin')->group(function () {
  Route::controller(AdminStudentController::class)->group(function () {
    Route::get('/', AdminHomeController::class);
    Route::prefix('/students')->name('.student')->group(function () {
      Route::get('/', 'index');
      Route::delete('/', 'destroy')->where('id', '[0-9]+')->name('.destory');
      Route::get('/add', 'add')->name('.add');
      Route::post('/add', 'store')->name('.store');
      Route::get('/edit/{id}', 'edit')->where('id', '[0-9]+')->name('.edit');
      Route::put('/edit/{id}', 'update')->where('id', '[0-9]+')->name('.update');
      Route::get('/show/{id}', 'show')->where('id', '[0-9]+')->name('.show');
    });
  });
  Route::controller(AdminInstructorController::class)->group(function () {
    Route::prefix('/instructors')->name('.instructor')->group(function () {
      Route::get('/', 'index');
      Route::delete('/', 'destroy')->where('id', '[0-9]+')->name('.destory');
      Route::get('/add', 'add')->name('.add');
      Route::post('/add', 'store')->name('.store');
      Route::get('/edit/{id}', 'edit')->where('id', '[0-9]+')->name('.edit');
      Route::put('/edit/{id}', 'update')->where('id', '[0-9]+')->name('.update');
      Route::get('/show/{id}', 'show')->where('id', '[0-9]+')->name('.show');
    });
  });
});


// instructor routes
Route::prefix('instructor')->name('instructor')->group(function () {
  Route::prefix('/courses')->name('.course')->controller(InstructorCourseController::class)->group(function () {
    Route::get('/', 'index');
    Route::delete('/', 'destroy')->name('.destory');
    Route::post('/', 'store')->name('.store');
    Route::get('/edit/{id}', 'edit')->where('id', '[0-9]+')->name('.edit');
    Route::put('/edit/{id}', 'update')->where('id', '[0-9]+')->name('.update');
    Route::get('/show/{id}', 'show')->where('id', '[0-9]+')->name('.show');
  });
});


// students routes
// Route::prefix('student')->group(function () {
//   Route::controller(studentController::class)->group(function () {
//     Route::get('/', );
//     Route::prefix('students')->group(function () {
//       Route::get('/', 'index');
//     });
//   });
// });




// test
// Route::get('/test', function () {
//   $studentsCount = 8;
//   $students = [];
//   return view('auth.forgotpassword');
//   // return view('admin.students', compact('studentsCount', 'students'));
// });