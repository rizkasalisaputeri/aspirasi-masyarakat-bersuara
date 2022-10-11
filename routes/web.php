<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

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


//user
Route::get('/dashboardUser', [userController::class,'showDashUser']);

Route::get('/InputLaporanProposal', [userController::class,'inputProposal']);

Route::get('/InputLaporanAnggaran', [userController::class,'inputAnggaran']);

Route::get('/userHistory', [userController::class,'showUserHistory']);

Route::get('/laporanSaya', [userController::class,'showLaporanSaya']);

Route::get('/user', [userController::class,'showDashUser']);

Route::get('/settingUser', [userController::class,'showSettingUser']);


//Admin
 
Route::get('/admin', [adminController::class, 'showDashAdm']);

Route::get('/editUser', [adminController::class, 'showEditUser']);

Route::get('/editLaporan', [adminController::class, 'showEditLaporan']);

Route::get('/editLokasi', [adminController::class, 'showEditLokasi']);

Route::get('/editKategori', [adminController::class, 'showEditKategori']);
