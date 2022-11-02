<?php

namespace App\Http\Controllers;

use App\Models\Pelapor;
use App\Http\Requests\StorePelaporRequest;
use App\Http\Requests\UpdatePelaporRequest;

class PelaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/dashboardUser');
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
     * @param  \App\Http\Requests\StorePelaporRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePelaporRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelapor  $pelapor
     * @return \Illuminate\Http\Response
     */
    public function show(Pelapor $pelapor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelapor  $pelapor
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelapor $pelapor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelaporRequest  $request
     * @param  \App\Models\Pelapor  $pelapor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePelaporRequest $request, Pelapor $pelapor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelapor  $pelapor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelapor $pelapor)
    {
        //
    }
}
