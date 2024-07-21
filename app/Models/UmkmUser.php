<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_umkm', 'owner', 'nomor_telepon', 'alamat', 'email', 'password'
    ];
}
