<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UMKMUserController;

// Non user
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/umkm', [UserController::class, 'indexUmkm'])->name('umkm');
Route::post('/filter-produk', [UserController::class, 'indexUmkm'])->name('filterProduk');
Route::get('/detail-umkm/{id}', [UserController::class, 'indexOrder'])->name('detail-umkm');
Route::get('/berita', [UserController::class, 'indexBerita'])->name('berita');
Route::get('/detail-berita/{id}', [UserController::class, 'indexDetailBerita'])->name('detail-berita');
Route::get('/wisata', [UserController::class, 'indexWisata'])->name('wisata');
Route::get('/batik', [UserController::class, 'indexBatik'])->name('batik');
Route::get('/kuliner', [UserController::class, 'indexKuliner'])->name('kuliner');
Route::get('/pertanian', [UserController::class, 'indexPertanian'])->name('pertanian');

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('admin/dashboard/daftarumkm', UMKMUserController::class)->middleware(['auth', 'verified']);
    Route::resource('admin/dashboard/form', BeritaController::class)->middleware(['auth', 'verified']);
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::resource('umkm/dashboard/formUmkm', ProdukController::class)->middleware(['auth', 'verified']);
    Route::resource('umkm/dashboard/profileUmkm', DataDiriController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User UMKM


require __DIR__.'/auth.php';
