<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Berita;
use App\Models\Produk;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () {
        return view('home');
    }

    public function indexUmkm(Request $request) {
        $kategori = $request->input('kategori', null);
        $umkm = $request->input('umkm', null);
    
        $query = Produk::query();
    
        if ($kategori) {
            $query->where('kategori', $kategori);
        }
    
        if ($umkm) {
            $query->whereHas('user', function ($q) use ($umkm) {
                $q->where('nama_umkm', $umkm);
            });
        }
    
        $produk = $query->get();
    
        $umkms = User::select('nama_umkm')->distinct()->get();
    
        return view('umkm', ['produk' => $produk, 'umkms' => $umkms]);
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
