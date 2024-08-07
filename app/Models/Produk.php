<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'deskripsi_produk', 'harga', 'status_produk', 'gambar', 'user_id'];

    // Definisi relasi many-to-one dengan user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
