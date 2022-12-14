<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori_laporan;
use App\Http\Controllers\Controller;
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
    public function createKategori()
    {
        return view('admin.createKategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeKategori(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=> 'required',
            'excerpt'=> 'nullable',
            'keterangan'=>'nullable',
        ]);
        kategori_laporan::create($validatedData);
        $request->session()->flash('success', 'Kategori berhasil ditambahkan!');
        return redirect('/editKategori');
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
