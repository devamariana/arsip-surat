<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\KategoriSuratController;

// Halaman awal -> langsung ke arsip surat
Route::get('/', [SuratController::class, 'index'])->name('surat.index');

// Halaman About
Route::get('/about', function () {
    return view('about');
})->name('about.index');

// CRUD Surat
Route::get('/surat/create', [SuratController::class, 'create'])->name('surat.create');
Route::post('/surat/store', [SuratController::class, 'store'])->name('surat.store');
Route::delete('/surat/{id}', [SuratController::class, 'destroy'])->name('surat.destroy'); // ✅ tambahkan ini

// CRUD Kategori Surat
Route::get('/kategori-surat', [KategoriSuratController::class, 'index'])->name('kategori.index');
Route::get('/kategori-surat/create', [KategoriSuratController::class, 'create'])->name('kategori.create');
Route::post('/kategori-surat', [KategoriSuratController::class, 'store'])->name('kategori.store');
Route::get('/kategori-surat/{id}/edit', [KategoriSuratController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori-surat/{id}', [KategoriSuratController::class, 'update'])->name('kategori.update');
Route::delete('/kategori-surat/{id}', [KategoriSuratController::class, 'destroy'])->name('kategori.destroy');
