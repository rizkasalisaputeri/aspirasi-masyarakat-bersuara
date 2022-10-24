<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $user = App\User::first();
    }
    
    public function showDashUser()
    {
        return view('user/dashboardUser');
    }

    public function showLaporanSaya()
    {
        return view('user/laporanSaya');
    }
    
    public function showSettingUser()
    {
        return view('user/settingUser');
    }

    public function showUserHistory()    
    {
        return view('user/userHistory');
    }

    public function inputAnggaran()
    {
        return view('user/userInputAnggaran');
    }

    public function inputProposal()
    {
        return view('user/userInputProposal');
    }
}