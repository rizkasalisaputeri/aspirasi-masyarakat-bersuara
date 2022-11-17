<?php

namespace App\Http\Controllers;

use App\Models\inputLaporanProposalControler;
use Illuminate\Http\Request;

class inputLaporanProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/userInputProposal');
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
     * @param  \App\Models\inputLaporanProposal  $inputLaporanProposal
     * @return \Illuminate\Http\Response
     */
    public function show(inputLaporanProposal $inputLaporanProposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inputLaporanProposal  $inputLaporanProposal
     * @return \Illuminate\Http\Response
     */
    public function edit(inputLaporanProposal $inputLaporanProposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inputLaporanProposal  $inputLaporanProposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inputLaporanProposal $inputLaporanProposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inputLaporanProposal  $inputLaporanProposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(inputLaporanProposal $inputLaporanProposal)
    {
        //
    }
}
