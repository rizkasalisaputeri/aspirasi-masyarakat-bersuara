<?php

namespace App\Http\Controllers;

use App\Models\userDash;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtlaporan = Pelaporan::where('user_id',Auth::user()->id)->with(['kategori_laporan','instansi'])->get();
        return view('user.dashboardUser', compact(['dtlaporan']));
    }

    public function userAlurdanSyarat()
    {
        return view('user.alur-dan-syarat');
    }

    public function userPelaporan()
    {
        return view('user.pelaporan');
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
     * @param  \App\Models\userDash  $userDash
     * @return \Illuminate\Http\Response
     */
    public function show(userDash $userDash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userDash  $userDash
     * @return \Illuminate\Http\Response
     */
    public function edit(userDash $userDash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userDash  $userDash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userDash $userDash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userDash  $userDash
     * @return \Illuminate\Http\Response
     */
    public function destroy(userDash $userDash)
    {
        //
    }
}
