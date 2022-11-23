<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePelaporanRequest;
use App\Http\Requests\UpdatePelaporanRequest;

class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelaporans = Pelaporan::all();
        return view('admin.editLaporan', compact('pelaporans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createLaporan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePelaporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePelaporanRequest $request)
    {
        Pelaporan::create([
            'ID_laporan' => $request->id,
            'judul_laporan' => $request->judul_laporan,
            'kategori_laporan' => $request->kategori_laporan,
            'tgl_laporan' => $request->tgl_laporan,
            'file_laporan' => $request->file_laporan,
        ]);
        return \redirect('/editLaporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelaporan $pelaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelaporan $pelaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelaporanRequest  $request
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePelaporanRequest $request, Pelaporan $pelaporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelaporan $pelaporan)
    {
        //
    }
}
