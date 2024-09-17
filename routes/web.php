<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'app');

Route::prefix('/dashboard')->name('dashboard')->group(function () {
    Route::get('', function() {
        return view('dashboard');
    });
});