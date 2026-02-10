<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanPKLController;
use App\Http\Controllers\SidangPKLController;
use App\Http\Controllers\SertifikatPKLController;

/*
|--------------------------------------------------------------------------
| Web Routes - PKL
|--------------------------------------------------------------------------
| Contoh route untuk:
| 1. Laporan PKL
| 2. Sidang PKL
| 3. Sertifikat PKL
| Framework: Laravel
*/

// =====================
// LAPORAN PKL
// =====================
Route::prefix('laporan-pkl')->group(function () {
    Route::get('/', [LaporanPKLController::class, 'index'])->name('laporan.index');
    Route::get('/create', [LaporanPKLController::class, 'create'])->name('laporan.create');
    Route::post('/', [LaporanPKLController::class, 'store'])->name('laporan.store');
    Route::get('/{id}', [LaporanPKLController::class, 'show'])->name('laporan.show');
    Route::get('/{id}/edit', [LaporanPKLController::class, 'edit'])->name('laporan.edit');
    Route::put('/{id}', [LaporanPKLController::class, 'update'])->name('laporan.update');
    Route::delete('/{id}', [LaporanPKLController::class, 'destroy'])->name('laporan.destroy');
});

// =====================
// SIDANG PKL
// =====================
Route::prefix('sidang-pkl')->group(function () {
    Route::get('/', [SidangPKLController::class, 'index'])->name('sidang.index');
    Route::get('/daftar', [SidangPKLController::class, 'create'])->name('sidang.create');
    Route::post('/daftar', [SidangPKLController::class, 'store'])->name('sidang.store');
    Route::get('/{id}', [SidangPKLController::class, 'show'])->name('sidang.show');
    Route::put('/{id}/verifikasi', [SidangPKLController::class, 'verifikasi'])->name('sidang.verifikasi');
});

// =====================
// SERTIFIKAT PKL
// =====================
Route::prefix('sertifikat-pkl')->group(function () {
    Route::get('/', [SertifikatPKLController::class, 'index'])->name('sertifikat.index');
    Route::get('/{id}', [SertifikatPKLController::class, 'show'])->name('sertifikat.show');
    Route::get('/{id}/download', [SertifikatPKLController::class, 'download'])->name('sertifikat.download');
});
