<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $beritaAll = Berita::all();
        return view('dashboard.admin.dashboard', compact('beritaAll'));
    }
     public function daftar_umkm()
    {
        return view('dashboard.admin.daftar-umkm');
    }
     public function regist_umkm()
    {
        return view('dashboard.admin.register-umkm');
    }
}
