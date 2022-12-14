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
        'nama' => 'Aspirasi Masyarakat',
        'excerpt' => 'Masyarakat dapat menyampaikan pendapat yang nantinya...',
        'keterangan' => 'Masyarakat dapat menyampaikan pendapat yang nantinya dapat membantu dalam
        mencapai suatu tujuan dalam berbagai bidang. Penyampaian aspirasi ini dapat dilakukan secara individu maupun kelompok.'
        ]);

        kategori_laporan::create([
            'nama' => 'Pengaduan Masyarakat',
            'excerpt' => 'Masyarakat dapat menyampaikan keluhan kepada pemerintah kota Surabaya...',
            'keterangan' => 'Masyarakat dapat menyampaikan keluhan kepada pemerintah kota
            Surabaya atas pelayanan yang tidak sesuai dengan standar pelayanan, atau mengabaikan kewajiban.
            Hal ini nantinya akan ditindak lanjuti oleh pihak yang bersangkutan.'
        ]);
    }
}
