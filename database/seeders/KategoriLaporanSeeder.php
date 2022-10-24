<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriLaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriLaporan::create([
            'Nama_Kategori' => 'Politik',
        ]);

        KategoriLaporan::create([
            'Nama_Kategori' => 'Budaya',
        ]);

        KategoriLaporan::create([
            'Nama_Kategori' => 'Sosial',
        ]);

        KategoriLaporan::create([
            'Nama_Kategori' => 'Kesehatan',
        ]);

        KategoriLaporan::create([
            'Nama_Kategori' => 'Ekonomi',
        ]);
    }
}
