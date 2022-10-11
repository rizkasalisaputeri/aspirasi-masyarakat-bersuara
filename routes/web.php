<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/registrasi', function () {
    return view('regist');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/laporan-anggaran', function () {
    return view('pelaporan');
});

Route::get('/laporan-proposal', function () {
    return view('pelaporan');
});


Route::get('/alur-dan-syarat', function () {
    return view('alur-dan-syarat');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/dashboardUser', function () {
    return view('user/dashboardUser');
});

Route::get('/verifikasi', function () {
    return view('verifikasi');
});

Route::get('/InputLaporanProposal', function () {
    return view('user/userInputProposal');
});

Route::get('/InputLaporanAnggaran', function () {
    return view('user/userInputAnggaran');
});

Route::get('/userHistory', function () {
    return view('user/userHistory');
});

Route::get('/laporanSaya', function () {
    return view('user/laporanSaya');
});

Route::get('/user', function () {
    return view('user/dashboardUser');
});

<<<<<<< HEAD
Route::get('/settingUser', function () {
    return view('user/settingUser');
=======
Route::get('/Admin/Dashboard', function () {
    return view('admin/dashboardAdm');
>>>>>>> 3655a42a1ba8a876e0a56a0fc8107803ee927d97
});