<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index() {
        $produk = Produk::all();
        return view('dashboard.umkm.dashboard', compact('produk'));
    }
}
