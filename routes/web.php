<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

// Non user
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/umkm', [UserController::class, 'indexUmkm'])->name('umkm');
Route::get('/order-detail', [UserController::class, 'indexOrder'])->name('order-detail');
Route::get('/berita', [UserController::class, 'indexBerita'])->name('berita');
Route::get('/detail-berita', [UserController::class, 'indexDetailBerita'])->name('detail-berita');

// Admin
Route::get('/admin/dashboard', function () {
    return view('dashboard.admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard-admin');

Route::get('/dashboard', function () {
    return view('dashboard.umkm.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard-umkm');

Route::get('/dashboard/form', function () {
    return view('dashboard.umkm.form');
})->middleware(['auth', 'verified'])->name('dashboard-form');

Route::get('/dashboard/profile', function () {
    return view('dashboard.umkm.profile');
})->middleware(['auth', 'verified'])->name('dashboard-profile');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User UMKM


require __DIR__.'/auth.php';
