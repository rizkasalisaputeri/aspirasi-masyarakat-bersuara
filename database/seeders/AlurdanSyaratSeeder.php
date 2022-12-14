<?php

namespace Database\Seeders;

use App\Models\AlurdanSyarat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlurdanSyaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlurdanSyarat::create([
            'nama' => 'Alur',
            'excerpt'=>'Alur pembuatan laporan hingga laporan ditidak lanjuti',
            'keterangan' => '	1. Pelapor harus melakukan registrasi terlebih dahulu.
            2. Pelapor melakukan login terlebih dahulu lalu dapat mengisi form pelaporan
            3. Laporan akan diverifikasi 3x24 jam
            4. Laporan akan diserahkan ke pihak yang bersangkutan
            5. Laporan akan ditindak lanjuti 7x24 jam setelah laporan terverifikasi
            6. Anda dapat menganggapi laporan
            7. Laporan akan terus ditindaklanjuti hingga terselesaikan'
        ]);

        AlurdanSyarat::create([
            'nama' => 'Syarat',
            'excerpt'=>'Syarat ini wajib dipenuhi agar laporan dapat segera ditindaklanjut',
            'keterangan' => '
            1. Laporan harus relevan dengan kinerja pemerintah.
            2. Laporan memuat identitas dan alamat pengirm yang jelas dan lengkap
            3. Menggunakan Bahasa Indonesia yang baik dan benar.
            4. Bukan merupakan ujaran, SARA, dan caci maki.
            5. Bukan merupakan laporan yang sudah disampaikan dan masih dalam proses penanganan.
            6. Masalah yang disampaikan memerlukan penyelesaian atau respon
            7. Data pendukung disampaikan secara lengkap dan akurat
        '
        ]);
    }
}
