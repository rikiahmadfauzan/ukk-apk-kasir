<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DiskonProduk;
use App\Models\KategoriProduk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     User::create([
        'name' => 'Alex Deco',
        'username' => 'alex',
        'email' => 'alex@gmail.com',
        'password' => bcrypt('password'),
        'level' => 'admin'
     ]);
     User::create([
        'name' => 'Fuzan Ahmad',
        'username' => 'Fauzan',
        'email' => 'fauzan@gmail.com',
        'password' => bcrypt('password'),
        'level' => 'petugas'
     ]);
     User::create([
        'name' => 'Riki Ahmad Fauzan',
        'username' => 'iki',
        'email' => 'iki@gmail.com',
        'password' => bcrypt('password'),
        'level' => 'petugas'
     ]);

    //  KategoriProduk::create([
    //     'nama_kategori' => 'Elektronik',
    //     'status' => 'active'
    //  ]);

    //  DiskonProduk::create([
    //     'nama_diskon' => '12,12',
    //     'jenis_diskon' => 'persentase',
    //     'nilai_diskon' => 50,
    //     'deskripsi' => 'lorem ipum',
    //     'berlaku_mulai' => '2024-03-05',
    //     'berlaku_selesai' => '2024-03-09',
    //  ]);

    //  DiskonProduk::create([
    //     'nama_diskon' => '12,12',
    //     'jenis_diskon' => 'persentase',
    //     'nilai_diskon' => 50,
    //     'deskripsi' => 'lorem ipum',
    //     'berlaku_mulai' => '2024-03-05',
    //     'berlaku_selesai' => '2024-03-09',
    //  ]);
    }
}
