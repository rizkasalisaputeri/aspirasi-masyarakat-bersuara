<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request){
        // $credentials =
        $request->validate([
            'email' => 'required|email.dns',
            'password' => 'required'
        ]);

        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        // }


        dd('berhasil login');
    }
}
