<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $produk = Produk::where('user_id', $user->id)->get();
        return view('dashboard.umkm.dashboard', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.umkm.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|max:255',
            'gambar' => 'required|mimes:png,jpg,jpeg,svg,gif,webp',
            'deskripsi_produk' => 'required',
            'harga' => 'nullable|numeric',
            'kategori' => 'required|in:Fashion,Makanan,Aksesoris,Kosmetik'
        ]);

        $produk = new Produk();
        $produk->nama_produk = $request->input('nama_produk');
        if ($request->hasFile('gambar'))
        {
            $gambar = $request->file('gambar');
            $namaGambar = time(). '.' .$gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/content'), $namaGambar);
            $produk->gambar = $namaGambar;
        };
        $produk->deskripsi_produk = $request->input('deskripsi_produk');
        $produk->harga = $request->input('harga') ?? null;
        $produk->kategori = $request->input('kategori');
        $produk->status_produk = 'Tersedia';
        $produk->user_id = Auth::id();

        Alert::success('Berhasil', 'Produk Berhasil Di Upload');

        $produk->save();

        return redirect(route('formUmkm.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::find($id);
        return view('dashboard.umkm.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'max:255',
            'gambar' => 'image|mimes:png,jpg,jpeg,svg,gif,webp',
            'deskripsi_produk' => '',
            'harga' => '',
            'status_produk' => '',
            'kategori' => 'in:Fashion,Makanan,Aksesoris,Kosmetik'
        ]);

        $produk = Produk::find($id);
        $original = $produk->getAttributes(); 
        $produk->nama_produk = $request->input('nama_produk');
        if ($request->hasFile('gambar'))
        {
            $gambar = $request->file('gambar');
            $namaGambar = time(). '.' .$gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/content'), $namaGambar);
            $produk->gambar = $namaGambar;
        };
        $produk->deskripsi_produk = $request->input('deskripsi_produk');
        $produk->harga = $request->input('harga');
        $produk->kategori = $request->input('kategori');
        $produk->status_produk = $request->input('status_produk');
        $produk->user_id = Auth::id();


        if ($produk->getAttributes() == $original) {
        Alert::info('Informasi', 'Tidak ada data yang diubah.');
        return redirect()->route('formUmkm.index'); 
    }

    $produk->save();
    Alert::success('Berhasil', 'Produk Berhasil Di Update');
    return redirect(route('formUmkm.index'));

        return redirect(route('formUmkm.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        Alert::success('Berhasil', 'Produk Berhasil Dihapus');
        return redirect()->back();
    }
}
