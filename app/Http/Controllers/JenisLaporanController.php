<?php

namespace App\Http\Controllers;

use App\Models\JenisLaporan;
use App\Http\Requests\StoreJenisLaporanRequest;
use App\Http\Requests\UpdateJenisLaporanRequest;

class JenisLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/editJenis', [
            'Nama_Laporan' => Nama_Laporan
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJenisLaporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJenisLaporanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisLaporan  $jenisLaporan
     * @return \Illuminate\Http\Response
     */
    public function show(JenisLaporan $jenisLaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisLaporan  $jenisLaporan
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisLaporan $jenisLaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJenisLaporanRequest  $request
     * @param  \App\Models\JenisLaporan  $jenisLaporan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJenisLaporanRequest $request, JenisLaporan $jenisLaporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisLaporan  $jenisLaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisLaporan $jenisLaporan)
    {
        //
    }
}
