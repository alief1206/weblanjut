<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Models\Pengguna;
Route::get('/show', [SiswaController::class, 'tampilkan']);
Route::get('/showView/', [SiswaController::class, 'tampilkanView']);
Route::get('/showGuru', [GuruController::class, 'index']);
Route::view('/home','welcome');
Route::get('/pengguna',[PenggunaController::class,'get']);
Route::post('/pengguna',[PenggunaController::class,'insert']);