<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisLaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisLaporan::create([
            'Nama_Laporan' => 'Laporan Proposal',
        ]);

        JenisLaporan::create([
            'Nama_Laporan' => 'Laporan Anggaran',
        ]);
    }
}
