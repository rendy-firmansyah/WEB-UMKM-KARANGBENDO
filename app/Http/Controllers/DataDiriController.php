<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DataDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
    public function edit()
    {
        $user = Auth::user();
        // $editUser = $user()
        return view('dashboard.umkm.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
{
    $request->validate([
        'foto_profile' => 'image|mimes:png,jpg,jpeg',
        'deskripsi_toko' => '',
        'nama_umkm' => 'required|string|max:255',
    ]);

    $user = Auth::user();
    $dataUpdated = false;

    if ($request->hasFile('foto_profile')) {
        $gambar = $request->file('foto_profile');
        $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('images/content'), $namaGambar);
        $user->foto_profile = $namaGambar;
        $dataUpdated = true;
    }

    if ($user->deskripsi_toko !== $request->input('deskripsi_toko')) {
        $user->deskripsi_toko = $request->input('deskripsi_toko');
        $dataUpdated = true;
    }

    if ($user->nama_umkm !== $request->input('nama_umkm')) {
        $user->nama_umkm = $request->input('nama_umkm');
        $dataUpdated = true;
    }

    if ($dataUpdated) {
        $user->save();
        Alert::success('Success', 'Profile berhasil diperbarui');
    } else {
        Alert::info('Info', 'Tidak ada perubahan data');
    }

    return redirect()->back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
