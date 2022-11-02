<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Laporan;
use App\Http\Requests\StoreKategori_LaporanRequest;
use App\Http\Requests\UpdateKategori_LaporanRequest;

class KategoriLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/editKategori');
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
     * @param  \App\Http\Requests\StoreKategori_LaporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKategori_LaporanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori_Laporan  $kategori_Laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_Laporan $kategori_Laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori_Laporan  $kategori_Laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_Laporan $kategori_Laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategori_LaporanRequest  $request
     * @param  \App\Models\Kategori_Laporan  $kategori_Laporan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKategori_LaporanRequest $request, Kategori_Laporan $kategori_Laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori_Laporan  $kategori_Laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori_Laporan $kategori_Laporan)
    {
        //
    }
}
