<?php

namespace App\Http\Controllers;
use App\Models\instansi;
use App\Models\laporanSaya;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\kategori_laporan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class laporanSayaController extends Controller
{
    public function index()
    {
        $dtlaporan = laporanSaya::where('user_id',Auth::user()->id)->with(['kategori_laporan','instansi'])->get();
        return view('user.laporanSaya', compact(['dtlaporan']));
    }

    public function indexAdm()
    {
    $pelaporans = laporanSaya::with(['kategori_laporan','instansi'])->get();
        return view('admin.editLaporan', compact(['pelaporans']));
    }

    public function hapuslaporan()
    {
        laporanSaya::find(request('idlaporan'))->delete();
        return back()->withSuccess('yes');
    }

    public function updatelaporan()
    {
        laporanSaya::find(request('idlaporan'))->update([
            'judul_laporan'=>request('judul_laporan'),

        ]);
        return back()->withSuccess('yes');
    }

    public function create()
    {
        $instansi = instansi::all();
        $kategori = kategori_laporan::all();
        return view('user.userInputLaporan',[
            'kategori'=>$kategori,
            'instansi'=>$instansi,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'judul_laporan' => 'required',
            'rangkuman' => 'required',
            'kategori_id' => 'required',
            'instansi_id' => 'required',
            // 'file' => 'required|mimes:pdf',
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        laporanSaya::create($validatedData);

        return redirect('/laporanSaya');

    }
}
