<?php

namespace Database\Seeders;

use App\Models\instansi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        instansi::create([
            'nama' => 'Dinas Pendidikan',
            'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
            'telp'=> '(031) 8418904',
        ]);

        instansi::create([
            'nama' => 'Dinas Kesehatan',
            'alamat' => 'Jalan Jemursari No. 197 Surabaya',
            'telp'=> '(031) 8439473',
        ]);

        instansi::create([
            'nama' => 'Dinas Sumber Daya Air dan Bina Marga',
            'alamat' => 'Jalan Jimerto No. 6-8 Surabaya',
            'telp'=> '(031) 5343051-57',
        ]);

        instansi::create([
            'nama' => 'Dinas Perumahan Rakyat dan Kawasan Permukiman Serta Pertanahan',
            'alamat' => 'Jalan Jimerto No. 8 Surabaya',
            'telp'=> '(031) 5461865',
        ]);

        instansi::create([
            'nama' => 'Dinas Pemadam Kebakaran dan Penyelamatan',
            'alamat' => 'Jalan Pasar Turi No. 21 Surabaya',
            'telp'=> '(031) 3533843',
        ]);

        instansi::create([
            'nama' => 'Dinas Sosial',
            'alamat' => 'Jalan Arief Rahman Hakim No. 131-133 Surabaya',
            'telp'=> '(031) 59174416',
        ]);

        instansi::create([
            'nama' => 'Dinas Perindustrian dan Tenaga Kerja',
            'alamat' => 'Jalan Tunjungan No. 1-3 (Eks. Gedung Siola)',
            'telp'=> '-',
        ]);

        // instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);

        // Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);

        // Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);

        // Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);
        // Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);Instansi::create([
        //     'nama' => 'Dinas Pendidikan',
        //     'alamat' => 'Jalan Jagir Wonokromo No. 356 Surabaya',
        //     'telp'=> 'Unair',
        // ]);
    }
}
