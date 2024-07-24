<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UMKMUserController;

// Non user
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/umkm', [UserController::class, 'indexUmkm'])->name('umkm');
Route::get('/order-detail', [UserController::class, 'indexOrder'])->name('order-detail');
Route::get('/berita', [UserController::class, 'indexBerita'])->name('berita');
Route::get('/detail-berita/{id}', [UserController::class, 'indexDetailBerita'])->name('detail-berita');

// Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard-admin');
// Route::get('/admin/dashboard/list-umkm', [AdminController::class, 'daftar_umkm'])->middleware(['auth', 'verified'])->name('dashboard-list-umkm');
// Route::get('/admin/dashboard/register-umkm', [AdminController::class, 'regist_umkm'])->middleware(['auth', 'verified'])->name('dashboard-register-umkm');
// Route::get('/admin/dashboard/edit-umkm', [AdminController::class, 'ubahData_umkm'])->middleware(['auth', 'verified'])->name('dashboard-ubahData-umkm');

// Route::get('/admin/dashboard/form', function () {
//     return view('dashboard.admin.form');
// })->middleware(['auth', 'verified'])->name('dashboard-form-admin');

// route::get('/admin/dashboard/edit', function () {
//     return view('dashboard.admin.edit');
// })->middleware(['auth', 'verified'])->name('dashboard-admin-edit');

Route::resource('admin/dashboard/daftarumkm', UMKMUserController::class)->middleware(['auth', 'verified']);
Route::resource('admin/dashboard/form', BeritaController::class)->middleware(['auth', 'verified']);
Route::resource('umkm/dashboard/formUmkm', ProdukController::class)->middleware(['auth', 'verified']);

// UMKM
Route::get('/umkm/dashboard', [UmkmController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard-umkm');

// Route::get('/dashboard/edit', function () {
//     return view('dashboard.umkm.edit');
// })->middleware(['auth', 'verified'])->name('dashboard-umkm-edit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User UMKM


require __DIR__.'/auth.php';
