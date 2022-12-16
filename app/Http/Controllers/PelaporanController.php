<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\instansi;
use App\Models\Pelaporan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\kategori_laporan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PelaporanController extends Controller
{
    public function index()
    {
        $dtlaporan = Pelaporan::where('user_id',Auth::user()->id)->with(['kategori_laporan','instansi'])->get();
        return view('user.laporanSaya', compact(['dtlaporan']));
    }

    public function indexAdm()
    {
        $pelaporans = Pelaporan::with(['kategori_laporan','instansi','user'])->get();
        return view('admin.editLaporan', compact(['pelaporans']));
    }

    public function hapuslaporan()
    {
        Pelaporan::find(request('idlaporan'))->delete();
        return back()->withSuccess('Laporan berhasil dihapus');
    }

    public function updatelaporan(Request $request)
    {
        Pelaporan::find(request('idlaporan'))->update([
            'status'=>request('status'),
            'lampiran_adm'=>request('lampiran_adm'),
        ]);

        if($request->file('lampiran_adm')){
            $validatedData['lampiran_adm'] = $request->file('lampiran_adm')->store('post-file');
        }
        return back()->withSuccess('Laporan berhasil di update');
    }

    public function updateTanggapan()
    {
        Pelaporan::find(request('idlaporan'))->update([
            'tanggapan'=>request('tanggapan')
        ]);
        return back()->withSuccess('Tanggapan berhasil dikirim');
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
            'lampiran_user' => 'mimes:pdf,jpg,jpeg,png,mp4'
        ]);

        if($request->file('lampiran_user')){
            $validatedData['lampiran_user'] = $request->file('lampiran_user')->store('post-file');
        }

        $validatedData['user_id'] = Auth::user()->id;
        Pelaporan::create($validatedData);

        return redirect('/laporanSaya');
    }
}
