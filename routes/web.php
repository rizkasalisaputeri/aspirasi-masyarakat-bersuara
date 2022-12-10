<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelaporController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\laporanSayaController;
use App\Http\Controllers\inputLaporanController;
use App\Http\Controllers\SettingPelaporController;
use App\Http\Controllers\dashUserController;
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

Route::get('/', [homeController::class,'index'])->middleware('guest');
Route::get('/home', [homeController::class,'index'])->middleware('guest');
Route::get('/registrasi', [homeController::class,'showRegistrasi']);
Route::get('/alur-dan-syarat', [homeController::class,'showAlurdanSyarat']);
Route::get('/contact', [homeController::class,'showContact']);
Route::get('/laporan-anggaran', [homeController::class,'showPelaporan']);
Route::get('/laporan-proposal', [homeController::class,'showPelaporan']);

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/registrasi', function () {
//     return view('regist');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


// Route::get('/laporan-anggaran', function () {
//     return view('pelaporan');
// });

// Route::get('/laporan-proposal', function () {
//     return view('pelaporan');
// });


// Route::get('/alur-dan-syarat', function () {
//     return view('alur-dan-syarat');
// });




Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class, "logout"])->middleware('auth');
Route::get('/verifikasi', function () {
    return view('verifikasi');
});

Route::get('/regist', [RegisterController::class,'index']);
Route::post('/regist', [RegisterController::class,'store']);

//user
//dashboard
Route::group(['middleware'=>['auth','ceklevel:user']],function ()
{
    Route::get('/dashboardUser', [dashUserController::class,'index']);
    Route::get('/alur-dan-syarat-user', [dashUserController::class,'userAlurdanSyarat']);
    Route::get('/pelaporan-user', [dashUserController::class,'userPelaporan']);

    //laporansaya
    Route::get('/laporanSaya', [laporanSayaController::class,'index']);
    Route::get('buatLaporan', [LaporanSayaController::class,'create']);
    // Route::post('storeLaporan', [LaporanSayaController::class, 'store']);


    // Route::get('create', [laporanSayaController::class,'create']);
    Route::post('/store', [laporanSayaController::class,'store']);
// Route::get('/user', [PelaporController::class,'index']);
    Route::get('/settingUser', [SettingPelaporController::class,'index']);
});
//Admin
Route::group(['middleware'=>['auth','ceklevel:admin']],function ()
{
    Route::post('/hapus-laporan', [laporanSayaController::class ,'hapuslaporan']);
    Route::post('/update-laporan', [laporanSayaController::class ,'updatelaporan']);
Route::get('/admin', [adminController::class, 'showDashAdm']);
Route::get('/editUser', [userController::class, 'index']);
Route::get('createUser', [userController::class, 'create']);
Route::post('storeUser', [userController::class, 'store']);
Route::get('/editLaporan', [LaporanSayaController::class, 'indexAdm']);
Route::get('createLaporan', [PelaporanController::class, 'create']);
Route::post('/storeadmin', [PelaporanController::class, 'store']);
});
