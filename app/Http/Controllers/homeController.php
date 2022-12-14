<?php
namespace App\Http\Controllers;

use App\Models\instansi;
use Illuminate\Http\Request;
use App\Models\AlurdanSyarat;
use App\Models\kategori_laporan;

class homeController extends Controller
{
    public function index()
    {
        $alur = AlurdanSyarat::find(1);
        $syarat = AlurdanSyarat::find(2);
        $kat1 = kategori_laporan::find(1);
        $kat2 = kategori_laporan::find(2);
        return view('home', [
            'instansis'=>instansi::all(),
            'alur' => $alur,
            'syarat'=> $syarat,
            'kat1' => $kat1,
            'kat2' => $kat2
        ]);
    }

    public function showAlurdanSyarat()
    {
        return view('alur-dan-syarat');
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showPelaporan()
    {
        return view('pelaporan');
    }

    public function showRegistrasi()
    {
        return view('regist');
    }
}
