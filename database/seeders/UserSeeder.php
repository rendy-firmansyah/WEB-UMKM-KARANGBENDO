<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'nomor_telepon' => '085648408330',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'usertype'=> 'admin',
        ]);
        $pandawa = User::create([
            'name' => 'UMKM Pandawa',
            'nomor_telepon' => '085648408330',
            'email' => 'pandawa@gmail.com',
            'password' => bcrypt('pandawa123'),
        ]);
    }
}
