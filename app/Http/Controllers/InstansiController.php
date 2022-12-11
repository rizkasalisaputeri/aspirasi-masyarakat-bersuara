<?php

namespace App\Http\Controllers;

use App\Models\instansi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInstansiRequest;
use App\Http\Requests\UpdateInstansiRequest;

class InstansiController extends Controller
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
    public function createInstansi()
    {
        return view('admin.createInstansi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstansi(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=> 'required',
            'alamat'=> 'required',
            'telp'=>'nullable',
        ]);
        instansi::create($validatedData);
        $request->session()->flash('success', 'Instansi berhasil ditambahkan!');
        return redirect('/editInstansi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function show(instansi $instansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function edit(instansi $instansi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinstansiRequest  $request
     * @param  \App\Models\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinstansiRequest $request, instansi $instansi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(instansi $instansi)
    {
        //
    }
}
