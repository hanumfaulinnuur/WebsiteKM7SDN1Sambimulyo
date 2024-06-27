<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;

// Route::get('/', function () {
//     return view('Admin.login');
// });

//routing login admin
Route::get('/', [AdminController::class, 'login']);
Route::post('/proses-login', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout']);

//routing data siswa
Route::resource('siswa', SiswaController::class);