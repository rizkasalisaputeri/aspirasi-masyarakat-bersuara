<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function showDashAdm()
    {
        return view('admin/dashboardAdm');
    }

    // public function showEditKategori()
    // {
    //     return view('admin/editKategori');
    // }
    
    // // public function showEditLaporan()
    // // {
    // //     return view('admin/editLaporan');
    // // }

    // public function showEditLokasi()    
    // {
    //     return view('admin/editLokasi');
    // }

    // public function showEditUser()
    // {
    //     return view('admin/editUser');
    // }
}