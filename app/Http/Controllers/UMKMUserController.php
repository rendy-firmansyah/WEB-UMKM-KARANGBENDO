<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'email' => 'required|string|lowercase|email|max:255|unique:umkm_users',
            'password' => 'required|string|min:8',
        ]);

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

        $validator = Validator::make($request->all(), [
            'nama_umkm' => 'sometimes|required|max:255',
            'owner' => 'sometimes|required|max:255',
            'nomor_telepon' => 'sometimes|required|max:15',
            'alamat' => 'sometimes|required|max:255',
            'email' => 'sometimes|required|string|lowercase|email|max:255|unique:umkm_users,email,' . $id,
            'password' => 'sometimes|required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->has('nama_umkm')) {
            $umkmUser->nama_umkm = $request->nama_umkm;
        }
        if ($request->has('owner')) {
            $umkmUser->owner = $request->owner;
        }
        if ($request->has('nomor_telepon')) {
            $umkmUser->nomor_telepon = $request->nomor_telepon;
        }
        if ($request->has('alamat')) {
            $umkmUser->alamat = $request->alamat;
        }
        if ($request->has('email')) {
            $umkmUser->email = $request->email;
        }
        if ($request->has('password')) {
            $umkmUser->password = Hash::make($request->password);
        }

        $umkmUser->save();

        return redirect()->route('daftarumkm.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $umkmUser = User::find($id);
        $umkmUser->delete();

        return redirect()->back();
    }
}
