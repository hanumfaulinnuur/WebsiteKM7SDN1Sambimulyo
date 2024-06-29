<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\GuruController;
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
Route::resource('siswa', SiswaController::class)->middleware('auth');
//routing data guru
Route::resource('guru', GuruController::class)->middleware('auth');

//cetak pdf
Route::get('/export-pdf/{id}', [PDFController::class, 'exportPDF']);