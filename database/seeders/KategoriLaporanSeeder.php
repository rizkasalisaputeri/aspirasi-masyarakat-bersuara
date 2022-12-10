<?php

namespace Database\Seeders;

use App\Models\kategori_laporan;
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
        kategori_laporan::create([
        'nama' => 'Laporan Anggaran'
        ]);

        kategori_laporan::create([
            'nama' => 'Laporan Proposal'
            ]);
    }
}
