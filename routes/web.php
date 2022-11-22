<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelaporController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\laporanSayaController;
use App\Http\Controllers\SettingPelaporController;
use App\Http\Controllers\inputLaporanAnggaranController;
use App\Http\Controllers\inputLaporanProposalController;
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

Route::get('/verifikasi', function () {
    return view('verifikasi');
});

Route::get('/regist', [RegistrasiController::class,'index']);
Route::post('/regist', [RegistrasiController::class,'create']);

//user
Route::get('/dashboardUser', [PelaporController::class,'index']);

Route::get('/InputLaporanProposal', [InputLaporanProposalController::class,'index']);

Route::get('/InputLaporanAnggaran', [InputLaporanAnggaranController::class,'index']);

Route::get('/laporanSaya', [laporanSayaController::class,'index']);
Route::get('/InputLaporanProposal', [laporanSayaController::class,'create']);
Route::post('store', [laporanSayaController::class,'store']);

Route::get('/user', [PelaporController::class,'index']);

Route::get('/settingUser', [SettingPelaporController::class,'index']);


//Admin

Route::get('/admin', [adminController::class, 'showDashAdm']);
Route::get('/editUser', [userController::class, 'index']);
Route::get('createUser', [userController::class, 'create']);
Route::post('store', [userController::class, 'store']);



Route::get('/editLaporan', [PelaporanController::class, 'index']);
Route::get('createLaporan', [PelaporanController::class, 'create']);
Route::post('storeLaporan', [PelaporanController::class, 'store']);
