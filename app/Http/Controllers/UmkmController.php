<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index() {
        return view('dashboard.umkm.dashboard');
    }
    public function form()
    {
        return view('dashboard.umkm.form');
    }
    public function profile()
    {
        return view('dashboard.umkm.profile');
    }
}
