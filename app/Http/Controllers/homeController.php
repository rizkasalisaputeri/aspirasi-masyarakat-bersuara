<?php
namespace App\Http\Controllers;

use App\Models\instansi;
use App\Models\Pelaporan;
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
        $totalPelaporan = Pelaporan::count();
        $kat1Total = Pelaporan::where('kategori_id','1')->count();
        $kat2Total = Pelaporan::where('kategori_id','2')->count();

        return view('home', [
            'instansis'=>instansi::all(),
            'alur' => $alur,
            'syarat'=> $syarat,
            'kat1' => $kat1,
            'kat2' => $kat2,
            'totalPelaporan' => $totalPelaporan,
            'kat1Total' => $kat1Total,
            'kat2Total' => $kat2Total
        ]);
    }

    public function showAlurdanSyarat()
    {
        $alur = AlurdanSyarat::find(1);
        $syarat = AlurdanSyarat::find(2);
        return view('alur-dan-syarat', [
            'alur' => $alur,
            'syarat'=> $syarat,
        ]);
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showPelaporan()
    {
        $kat1 = kategori_laporan::find(1);
        $kat2 = kategori_laporan::find(2);
        return view('pelaporan', [
            'kat1' => $kat1,
            'kat2' => $kat2
        ]);
    }

    public function showRegistrasi()
    {
        return view('regist');
    }
}
