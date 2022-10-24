<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laporan;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laporan::create([
            'User_id' => '1',
            'Kategori_id' => '1',
            'Jenis_id'=> '1',
            'Status' => 'Terverifikasi',
        ]);
        
        Laporan::create([
            'User_id' => '2',
            'Kategori_id' => '2',
            'Jenis_id'=> '2',
            'Status' => 'Belum Terverifikasi',
        ]);

        Laporan::create([
            'User_id' => '3',
            'Kategori_id' => '3',
            'Jenis_id'=> '3',
            'Status' => 'Terverifikasi',
        ]);

        Laporan::create([
            'User_id' => '4',
            'Kategori_id' => '4',
            'Jenis_id'=> '4',
            'Status' => 'Belum Terverifikasi',
        ]);

        Laporan::create([
            'User_id' => '5',
            'Kategori_id' => '5',
            'Jenis_id'=> '5',
            'Status' => 'Terverifikasi',
        ]);

        Laporan::create([
            'User_id' => '6',
            'Kategori_id' => '6',
            'Jenis_id'=> '6',
            'Status' => 'Belum Terverifikasi',
        ]);

        Laporan::create([
            'User_id' => '7',
            'Kategori_id' => '7',
            'Jenis_id'=> '7',
            'Status' => 'Terverifikasi',
        ]);

        Laporan::create([
            'User_id' => '8',
            'Kategori_id' => '8',
            'Jenis_id'=> '8',
            'Status' => 'Belum Terverifikasi',
        ]);

        Laporan::create([
            'User_id' => '9',
            'Kategori_id' => '9',
            'Jenis_id'=> '9',
            'Status' => 'Terverifikasi',
        ]);

        Laporan::create([
            'User_id' => '10',
            'Kategori_id' => '10',
            'Jenis_id'=> '10',
            'Status' => 'Belum Terverifikasi',
        ]);
    }
}
