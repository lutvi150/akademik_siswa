<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::view('login', 'login');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::view('/data-siswa', 'admin.siswa.get')->name('data-siswa');
    Route::view('/data-siswa/add', 'admin.siswa.add')->name('add-siswa');
    Route::view('/data-mata-pelajaran', 'admin.data_mata_pelajaran')->name('data-mata-pelajaran');
    Route::view('/data-nilai', 'admin.data_nilai')->name('data-nilai');
});
