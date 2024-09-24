<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/forgot-password', 'forgot-password');

Route::view('/test', 'layouts.profile');