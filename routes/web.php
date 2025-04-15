<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Mahasiswa\SuratController;
use App\Http\Controllers\Admin\AuthController;


Route::get('/', function () {
    return redirect()->route('login');
});


// Auth Login & Logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'index'])->name('mahasiswa.dashboard');


// routes/web.php
Route::get('/mahasiswa/surat/keterangan-aktif', [SuratController::class,])->name('mahasiswa.surat.keterangan-aktif');
Route::post('/mahasiswa/surat/keterangan-aktif', [SuratController::class, 'keterangan-aktif']);

