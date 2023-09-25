<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // //menambahkan isi tabel
        // $buku = Buku::create([
        //     "judul" => "Pergi Pagi Pulang Siang",
        //     "penulis" => "Maritza Angel",
        //     "harga" => 45000,
        //     "tgl_terbit" => "2003-09-14"
        // ]);
        Buku::factory(10)->create();
    }
}
