<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showAlurdanSyarat()
    {
        return view('alur-dan-syarat');
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showPelaporan()
    {
        return view('pelaporan');
    }

    public function showRegistrasi()
    {
        return view('regist');
    }
}
