<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view()
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|max:255',
            'gambar' => 'required|mimes:png,jpg,jpeg',
            'deskripsi_produk' => 'required',
            'harga' => 'required',
            'kategori' => 'required|in:Batik,Makanan,Aksesoris,Kosmetik'
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
        $produk->harga = $request->input('harga');
        $produk->kategori = $request->input('kategori');
        $produk->status_produk = 'Tersedia';

        $produk->save();

        // return redirect->(route())
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
        // return view()
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'max:255',
            'gambar' => 'image|mimes:png,jpg,jpeg',
            'deskripsi_produk' => '',
            'harga' => '',
            'kategori' => 'in:Batik,Makanan,Aksesoris,Kosmetik'
        ]);

        $produk = Produk::find($id);
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
        $produk->status_produk = 'Tersedia';

        $produk->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        // return redirect()->back()
    }
}
