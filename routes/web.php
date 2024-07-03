<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/umkm', function () {
    return view('umkm');
})->name('umkm');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');