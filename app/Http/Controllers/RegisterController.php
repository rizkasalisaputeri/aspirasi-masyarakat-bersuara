<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('regist');
    }


    public function store(Request $request){
        $validatedData = $request->validate([
            'asal_instansi'=> 'required',
            'nama_depan'=> 'required',
            'nama_belakang'=> 'required',
            'alamat'=> 'required',
            'email'=> 'required|email:dns',
            'password'=> 'required|min:8|max:100'
        ]);
        User::create($validatedData);
        $request->session()->flash('success', 'Registrasi berhasil! Silahkan login');
        return redirect('regist');
    }
}
