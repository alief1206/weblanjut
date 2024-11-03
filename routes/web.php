<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\OngkirController;
Route::get('/show', [SiswaController::class, 'tampilkan']);
Route::get('/showView/', [SiswaController::class, 'tampilkanView']);
Route::get('/showGuru', [GuruController::class, 'index']);
Route::view('/home','welcome');
Route::get('/pengguna',[PenggunaController::class,'all']);
Route::post('/pengguna',[PenggunaController::class,'store']);
Route::get ('/provinsi', [OngkirController::class, 'listProvinsi']);
Route::get ('/provinsi/{id}', [OngkirController::class, 'getProvinsi']);
Route::get ('/kota', [OngkirController::class, 'listCity']);
Route::get ('/kota/{id}', [OngkirController::class,'getCity']);
Route::get ('/cost/{id}', [OngkirController::class,'getCost']);