<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

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
        $beritaAll = Berita::orderBy('created_at', 'desc')->take(12)->get();
        return view('berita', compact('beritaAll'));
    }

   public function indexDetailBerita($id) {
    $berita = Berita::find($id);
    if (!$berita) {
        return redirect()->route('berita')->with('error', 'Berita tidak ditemukan.');
    }
    return view('detail-berita', ['beritaAll' => [$berita]]);
   }
}
