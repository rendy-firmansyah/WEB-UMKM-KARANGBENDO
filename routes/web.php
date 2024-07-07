<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/umkm', function () {
    return view('umkm');
})->name('umkm');

Route::get('order-detail', function () {
    return view('order-detail');
})->name('order-detail');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/detail-berita', function () {
    return view('detail-berita');
})->name('detail-berita');