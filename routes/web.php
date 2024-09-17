<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::prefix('/test')->name('test.')->group(function () {
    Route::view('/table', 'test.table')->name('table');
});
