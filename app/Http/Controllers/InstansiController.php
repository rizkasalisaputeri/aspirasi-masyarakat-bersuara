<?php

namespace App\Http\Controllers;

use App\Models\instansi;
use App\Http\Requests\StoreinstansiRequest;
use App\Http\Requests\UpdateinstansiRequest;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            // 'nama' => 'Instansi',
            'instansis' => Instansi::all()
        ]);
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
     * @param  \App\Http\Requests\StoreinstansiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinstansiRequest $request)
    {
        //
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
