<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Berita;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index () {
        return view('home');
    }

    public function indexUmkm(Request $request) {
    $kategori = $request->input('kategori', null);
    $umkm = $request->input('umkm', null);

    $query = User::query();

    if ($kategori) {
        $query->whereHas('produks', function ($q) use ($kategori) {
            $q->where('kategori', $kategori);
        });
    }

    if ($umkm) {
        $query->where('nama_umkm', $umkm);
    }

    $user = $query->with('produks')->get();


    $umkms = User::select('nama_umkm')->distinct()->get();

    return view('umkm', ['user' => $user, 'umkms' => $umkms]);
}

   public function indexOrder($id) {
    $umkmStore = User::find($id);
    if (!$umkmStore) {
        return redirect()->route('home')->with('error', 'UMKM tidak ditemukan.');
    }
    
    $products = Produk::where('user_id', $umkmStore->id)->get();
    $user = Auth::user();
    return view('detail-umkm', ['umkmStore' => $umkmStore, 'products' => $products, 'user' => $user] );
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

   public function indexWisata () {
    return view('wisata');
}

    public function indexBatik () {
        return view('batik');
    }

    public function indexKuliner ( ) {
        return view('kuliner');

    }
    public function indexPertanian ( ) {
        return view('pertanian');}
}
