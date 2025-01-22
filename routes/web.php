<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('login', 'login');
Route::prefix('admin')->name('admin.')->group(function ()  {
    Route::view('/', 'admin.dashboard')->name('dashboard');
});
