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
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password, 'utype' => 'user'))) {
            $request->session()->regenerate();
            return redirect('/dashboardUser');
        }else if (Auth::attempt(array('email' => $request->email, 'password' => $request->password, 'utype' => 'admin'))) {
            $request->session()->regenerate();
            return redirect('/admin');
        }

        return back()->with('salah', 'Silahkan cek kembali email atau password anda')->with('email', $request->email);

    }
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
}
