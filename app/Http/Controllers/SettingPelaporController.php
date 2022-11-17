<?php

namespace App\Http\Controllers;

use App\Models\settingPelapor;
use Illuminate\Http\Request;

class SettingPelaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/settingUser');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\settingPelapor  $settingPelapor
     * @return \Illuminate\Http\Response
     */
    public function show(settingPelapor $settingPelapor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\settingPelapor  $settingPelapor
     * @return \Illuminate\Http\Response
     */
    public function edit(settingPelapor $settingPelapor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\settingPelapor  $settingPelapor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, settingPelapor $settingPelapor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\settingPelapor  $settingPelapor
     * @return \Illuminate\Http\Response
     */
    public function destroy(settingPelapor $settingPelapor)
    {
        //
    }
}
