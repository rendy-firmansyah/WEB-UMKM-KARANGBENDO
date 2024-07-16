<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.form');
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
            'judul_berita' => 'required|max:255',
            'isi_konten' => 'required',
            'gambar_berita' => 'required|mimes:png,jpg,jpeg',
            'author' => 'required',
        ]);

        $berita = new Berita();
        $berita->judul_berita = $request->input('judul_berita');
        $berita->isi_konten = $request->input('isi_konten');
        if ($request->hasFile('gambar_berita'))
        {
            $gambar = $request->file('gambar_berita');
            $namaGambar = time(). '.' .$gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/content'), $namaGambar);
            $berita->gambar_berita = $namaGambar;
        };
        $berita->author = $request->input('author');

        $berita->save();

        return redirect(route('dashboard-admin'));
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
        $berita = Berita::find($id);
        return view('dashboard.admin.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_berita' => 'max:255',
            'isi_konten' => '',
            'gambar_berita' => 'image|mimes:png,jpg,jpeg',
            'author' => 'max:255',
        ]);

        $berita = Berita::find($id);
        $berita->judul_berita = $request->input('judul_berita');
        $berita->isi_konten = $request->input('isi_konten');
        if ($request->hasFile('gambar_berita'))
        {
            $gambar = $request->file('gambar_berita');
            $namaGambar = time(). '.' .$gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/content'), $namaGambar);
            $berita->gambar_berita = $namaGambar;
        };
        $berita->author = $request->input('author');

        $berita->save();

        return redirect(route('dashboard-admin'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->back();
    }
}
