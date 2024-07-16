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
}
