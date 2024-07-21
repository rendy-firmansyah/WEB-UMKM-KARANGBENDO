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
        Schema::create('umkm_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm');
            $table->string('usertype')->default("user");
            $table->string('owner');
            $table->string('nomor_telepon');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm_users');
    }
};
