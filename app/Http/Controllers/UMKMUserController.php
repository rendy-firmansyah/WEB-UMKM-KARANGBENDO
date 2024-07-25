<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class UMKMUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userUmkm = User::where('usertype', '!=', 'admin')->get();
        return view('dashboard.admin.daftar-umkm', compact('userUmkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.register-umkm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_umkm' => 'required|max:255',
            'owner' => 'required|max:255',
            'nomor_telepon' => 'required|max:15',
            'alamat' => 'required|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            if ($validator->errors()->has('email')) {
                Alert::error('Gagal', 'Akun Gagal Dibuat Silahkan Gunakan Email Lain');
                return redirect()->route('daftarumkm.index')->withErrors($validator)->withInput();
            }
        }

        $umkmUser = User::create([
            'name' => 'UMKM',
            'nama_umkm' => $request->nama_umkm,
            'owner' => $request->owner,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // dd($umkmUser);
        Alert::success('Berhasil', 'Akun UMKM Berhasil Dibuat');
        return redirect()->route('daftarumkm.index');
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
        $umkmUser = User::find($id);
        return view('dashboard.admin.edit-umkm', compact('umkmUser'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
{
    $umkmUser = User::find($id);

    $originalData = [
        'nama_umkm' => $umkmUser->nama_umkm,
        'owner' => $umkmUser->owner,
        'nomor_telepon' => $umkmUser->nomor_telepon,
        'alamat' => $umkmUser->alamat,
        'email' => $umkmUser->email,
    ];

    $validator = Validator::make($request->all(), [
        'nama_umkm' => 'max:255',
        'owner' => 'max:255',
        'nomor_telepon' => 'max:15',
        'alamat' => 'max:255',
        'email' => 'string|lowercase|email|max:255|unique:users,email,' . $id,
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $input = $request->only(['nama_umkm', 'owner', 'nomor_telepon', 'alamat', 'email']);

    if ($request->input('action') === 'update') {
        if ($input == $originalData) {
            Alert::info('Info', 'Tidak ada data yang diubah');
            return redirect()->route('daftarumkm.index');
        } else {
            $umkmUser->update($input);
            Alert::success('Berhasil', 'Data UMKM berhasil diubah');
            return redirect()->route('daftarumkm.index');
        }
    } else if ($request->input('action') === 'back') {
        return redirect()->route('daftarumkm.index');
    }
}

    public function destroy(string $id)
    {
        $umkmUser = User::find($id);
        $umkmUser->delete();
        Alert::success('Berhasil', 'Akun UMKM Berhasil Dihapus');
        return redirect()->back();
    }
}
