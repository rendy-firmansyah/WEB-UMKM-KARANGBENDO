<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () {
        return view('home');
    }

    public function indexUmkm () {
        return view('umkm');
    }
    
    public function indexOrder () {
        return view('order-detail');
    }

    public function indexBerita () {
        return view('berita');
    }

    public function indexDetailBerita () {
        return view('detail-berita');
    }
}
