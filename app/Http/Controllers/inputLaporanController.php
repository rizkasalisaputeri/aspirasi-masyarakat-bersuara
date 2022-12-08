<?php

namespace App\Http\Controllers;

use App\Models\inputLaporanontrollerC;
use Illuminate\Http\Request;

class inputLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/userInputLaporan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.userInputLaporan');
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
            'kategori_laporan' => 'required',
            'file' => 'required|mimes:pdf|max:2048',
        ]);
        dd('berhasil');


        // Pelaporan::create($validatedData);

        // return redirect('/laporanSaya');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inputLaporanAnggaran  $inputLaporanAnggaran
     * @return \Illuminate\Http\Response
     */
    public function show(inputLaporanAnggaran $inputLaporanAnggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inputLaporanAnggaran  $inputLaporanAnggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(inputLaporanAnggaran $inputLaporanAnggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inputLaporanAnggaran  $inputLaporanAnggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inputLaporanAnggaran $inputLaporanAnggaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inputLaporanAnggaran  $inputLaporanAnggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(inputLaporanAnggaran $inputLaporanAnggaran)
    {
        //
    }
}
