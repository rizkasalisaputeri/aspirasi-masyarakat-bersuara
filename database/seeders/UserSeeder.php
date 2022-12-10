<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_depan' => 'Rizka',
            'nama_belakang' => 'Salisa',
            'asal_instansi'=> 'Unair',
            'email' => 'rizkaunair@gmail.com',
            'alamat' => 'Jl.Gebang',
            'password'=> bcrypt('rizkacantul'),
            'utype' => 'user',
        ]);

        User::create([
            'nama_depan' => 'Aisha',
            'nama_belakang' => 'Salisa',
            'asal_instansi'=> 'Unair',
            'email' => 'aishaunair@gmail.com',
            'alamat' => 'Jl.Setro',
            'password'=> bcrypt('aishacantul'),
            'utype' => 'admin',
        ]);

        // User::create([
        //     'nama_depan' => 'Putri',
        //     'nama_belakang' => 'Salisa',
        //     'asal_instansi'=> 'Unair',
        //     'email' => 'putriunair@gmail.com',
        //     'passowrd'=> 'putricantul',
        //     'alamat' => 'Jl.Manukan',
        //     'nomor_telp' => '082123172635',
        //     'NIK' => '152111513055',
        // ]);

        // User::create([
        //     'nama_depan' => 'Fitri',
        //     'nama_belakang' => 'Salisa',
        //     'asal_instansi'=> 'Unair',
        //     'email' => 'fitriunair@gmail.com',
        //     'passowrd'=> 'fitricantul',
        //     'alamat' => 'Jl.Sewu',
        //     'nomor_telp' => '0812346172635',
        //     'NIK' => '152111513000',
        // ]);

        // User::create([
        //     'nama_depan' => 'Hana',
        //     'nama_belakang' => 'Salisa',
        //     'asal_instansi'=> 'Unair',
        //     'email' => 'hanaunair@gmail.com',
        //     'passowrd'=> 'hanacantul',
        //     'alamat' => 'Jl.Cinta',
        //     'nomor_telp' => '082341782635',
        //     'NIK' => '152111513088',
        // ]);

        // User::create([
        //     'nama_depan' => 'Indana',
        //     'nama_belakang' => 'Aish',
        //     'asal_instansi'=> 'Unair',
        //     'email' => 'indanaunair@gmail.com',
        //     'passowrd'=> 'indanacantul',
        //     'alamat' => 'Jl.Lawu',
        //     'nomor_telp' => '08234690635',
        //     'NIK' => '152111513999',
        // ]);

        // User::create([
        //     'nama_depan' => 'Wahyu',
        //     'nama_belakang' => 'Sobirin',
        //     'asal_instansi'=> 'Unair',
        //     'email' => 'wahyunair@gmail.com',
        //     'passowrd'=> 'wahyubti',
        //     'alamat' => 'Jl.Rungkut',
        //     'nomor_telp' => '082006172635',
        //     'NIK' => '152000513039',
        // ]);

        // User::create([
        //     'nama_depan' => 'Rohaya',
        //     'nama_belakang' => 'Salimah',
        //     'asal_instansi'=> 'Unair',
        //     'email' => 'rohayaunair@gmail.com',
        //     'passowrd'=> 'rohaya123',
        //     'alamat' => 'Jl.Klampis',
        //     'nomor_telp' => '082340072635',
        //     'NIK' => '152111300039',
        // ]);

        // User::create([
        //     'nama_depan' => 'Putra',
        //     'nama_belakang' => 'Dafa',
        //     'asal_instansi'=> 'Unair',
        //     'email' => 'putradafaunair@gmail.com',
        //     'passowrd'=> 'putra123',
        //     'alamat' => 'Jl.Keputih',
        //     'nomor_telp' => '08234617000',
        //     'NIK' => '152111513039',
        // ]);

    }
}
