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
Route::get('/mahasiswa/surat/keterangan-aktif', [SuratController::class, 'KeteranganAKtif'])->name('mahasiswa.surat.keterangan-aktif');
Route::post('/mahasiswa/surat/keterangan-aktif', [SuratController::class, 'keteranganAktif']);


// Surat Pengantar Tugas Mata Kuliah
Route::get('/mahasiswa/surat/pengantar-tugas', [SuratController::class, 'pengantarTugas'])->name('mahasiswa.surat.pengantar-tugas');
Route::post('/mahasiswa/surat/pengantar-tugas', [SuratController::class, 'storePengantarTugas']);

// Surat Keterangan Lulus
Route::get('/mahasiswa/surat/keterangan-lulus', [SuratController::class, 'keteranganLulus'])->name('mahasiswa.surat.keterangan-lulus');
Route::post('/mahasiswa/surat/keterangan-lulus', [SuratController::class, 'storeKeteranganLulus']);

// Laporan Hasil Studi
Route::get('/mahasiswa/surat/laporan-hasil-studi', [SuratController::class, 'laporanHasilStudi'])->name('mahasiswa.surat.laporan-hasil-studi');
Route::post('/mahasiswa/surat/laporan-hasil-studi', [SuratController::class, 'storeLaporanHasilStudi']);

