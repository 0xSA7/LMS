<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'layouts.app');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/forgot-password', 'forgot-password');