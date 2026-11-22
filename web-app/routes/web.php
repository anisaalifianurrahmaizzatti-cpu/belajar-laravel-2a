<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\EmployeController;

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'prosesSegitiga']);

Route::get('/employe', [EmployeController::class, 'index']);
Route::get('/employe/create', [EmployeController::class, 'create']);
Route::post('/employe/store', [EmployeController::class, 'store']);

Route::get('/employe/edit/{id}', [EmployeController::class, 'edit']);
Route::post('/employe/update/{id}', [EmployeController::class, 'update']);
Route::get('/employe/delete/{id}', [EmployeController::class, 'destroy']);