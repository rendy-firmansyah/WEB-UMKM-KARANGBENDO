<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('gambar');
            $table->string('deskripsi_produk');
            $table->integer('harga');
            $table->enum('kategori', ['Batik', 'Makanan', 'Aksesoris', 'Kosmetik']);
            $table->enum('status_produk', ['Tersedia', 'Tidak Tersedia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
