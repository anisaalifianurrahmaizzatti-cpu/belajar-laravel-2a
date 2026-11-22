<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;

// Halaman login
Route::get('/', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'cek']);

// Halaman yang wajib login
Route::middleware('islogin')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

    Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
    Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'prosesSegitiga']);

    Route::get('/employe', [EmployeController::class, 'index']);
    Route::get('/employe/create', [EmployeController::class, 'create']);
    Route::post('/employe/store', [EmployeController::class, 'store']);

    Route::get('/employe/edit/{id}', [EmployeController::class, 'edit']);
    Route::post('/employe/update/{id}', [EmployeController::class, 'update']);
    Route::get('/employe/delete/{id}', [EmployeController::class, 'destroy']);

    Route::get('/logout', [AuthController::class, 'logout']);
});
