<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritaAll = Berita::all();
        return view('dashboard.admin.dashboard', compact('beritaAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.form');
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
        Alert::success('berhasil', 'Berita berhasil diupload');

        return redirect(route('form.index'));
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
    // Validasi input
    $request->validate([
        'judul_berita' => 'max:255',
        'isi_konten' => '',
        'gambar_berita' => 'image|mimes:png,jpg,jpeg',
        'author' => 'max:255',
    ]);

    $berita = Berita::find($id);

    $originalData = $berita->getAttributes();

    $berita->judul_berita = $request->input('judul_berita', $originalData['judul_berita']);
    $berita->isi_konten = $request->input('isi_konten', $originalData['isi_konten']);

    if ($request->hasFile('gambar_berita')) {
        $gambar = $request->file('gambar_berita');
        $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('images/content'), $namaGambar);
        $berita->gambar_berita = $namaGambar;
    } else {
        $berita->gambar_berita = $originalData['gambar_berita'];
    }

    $berita->author = $request->input('author', $originalData['author']);

    if ($request->input('action') === 'update') {
        if ($berita->isDirty()) {
            $berita->save();
            Alert::success('Berhasil', 'Berita berhasil diupdate');
        } else {
            Alert::info('Info', 'Tidak ada data yang diubah');
        }
        return redirect()->route('form.index');
    } elseif ($request->input('action') === 'back') {
        return redirect()->route('form.index');
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        Alert::success('Berhasil', 'Berita berhasil dihapus');
        return redirect()->back();
    }
}
