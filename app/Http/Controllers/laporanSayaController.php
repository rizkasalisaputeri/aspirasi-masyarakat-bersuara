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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $dtlaporan = laporanSaya::with('kategori')->with('kategori')->get();
        // $dtlaporan = DB::table('laporan_sayas')
        // ->join('kategori_laporans','kategori_laporans.id','=','laporan_sayas.id')
        // ->join('instansis','instansis.id','=','laporan_sayas.id')
        // ->select('laporan_sayas.*','kategori_laporans.nama AS nama_kategori','instansis.nama AS nama_instansi')
        // ->where('laporan_sayas.user_id',Auth::user()->id)
        // ->get();
        $dtlaporan = laporanSaya::where('user_id',Auth::user()->id)->with(['kategori_laporan','instansi'])->get();
    // dd($dtlaporan);
        return view('user.laporanSaya', compact(['dtlaporan']));
    }

    public function indexAdm()
    {
        // $dtlaporan = laporanSaya::with('kategori')->with('kategori')->get();
        // $pelaporans = DB::table('laporan_sayas')
        // ->join('kategori_laporans','kategori_laporans.id','=','laporan_sayas.id')
        // ->join('instansis','instansis.id','=','laporan_sayas.id')
        // ->select('laporan_sayas.*','kategori_laporans.nama AS nama_kategori','instansis.nama AS nama_instansi')
        // ->get();
    // dd($dtlaporan);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instansi = instansi::all();
        $kategori = kategori_laporan::all();
        return view('user.userInputLaporan',[
            'kategori'=>$kategori,
            'instansi'=>$instansi,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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


        // dd($request);
        laporanSaya::create($validatedData);
        // // Pelaporan::create($validatedData);

        return redirect('/laporanSaya');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
