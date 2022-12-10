<?php

namespace App\Http\Controllers;

use App\Models\kategori_laporan;
use App\Http\Requests\Storekategori_laporanRequest;
use App\Http\Requests\Updatekategori_laporanRequest;

class KategoriLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storekategori_laporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storekategori_laporanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori_laporan  $kategori_laporan
     * @return \Illuminate\Http\Response
     */
    public function show(kategori_laporan $kategori_laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori_laporan  $kategori_laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori_laporan $kategori_laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatekategori_laporanRequest  $request
     * @param  \App\Models\kategori_laporan  $kategori_laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Updatekategori_laporanRequest $request, kategori_laporan $kategori_laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori_laporan  $kategori_laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori_laporan $kategori_laporan)
    {
        //
    }
}
