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
use App\Http\Controllers\dashUserController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\laporanSayaController;
use App\Http\Controllers\inputLaporanController;
use App\Http\Controllers\SettingPelaporController;
use App\Http\Controllers\KategoriLaporanController;
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
Route::get('/laporan-1', [homeController::class,'showPelaporan']);
Route::get('/laporan-2', [homeController::class,'showPelaporan']);



Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class, "logout"])->middleware('auth');

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
    Route::get('/laporanSaya', [PelaporanController::class,'index']);
    Route::get('buatLaporan', [PelaporanController::class,'create']);
    Route::post('/beriTanggapan', [PelaporanController::class ,'updateTanggapan']);


    // Route::get('create', [PelaporanController::class,'create']);
    Route::post('/store', [PelaporanController::class,'store']);
// Route::get('/user', [PelaporController::class,'index']);
    Route::get('/settingUser', [SettingPelaporController::class,'index']);
});

//Admin
Route::group(['middleware'=>['auth','ceklevel:admin']],function ()
{
    //dashboard
Route::get('/admin', [adminController::class, 'showDashAdm']);

    //laporan
Route::get('/editLaporan', [PelaporanController::class, 'indexAdm']);
Route::post('/hapus-laporan', [PelaporanController::class ,'hapuslaporan']);
Route::post('/update-laporan', [PelaporanController::class ,'updatelaporan']);

    //user
Route::get('/editUser', [adminController::class, 'editUser']);
Route::get('createUser', [userController::class,'createUser']);
Route::post('storeUser', [userController::class,'storeUser']);
Route::post('/hapusUser', [adminController::class, 'hapusUser']);
Route::post('/updateUser', [adminController::class, 'updateUser']);

    //instansi
Route::get('/editInstansi', [adminController::class, 'editInstansi']);
Route::get('createInstansi', [InstansiController::class,'createInstansi']);
Route::post('storeInstansi', [InstansiController::class,'storeInstansi']);
Route::post('/hapusInstansi', [adminController::class, 'hapusInstansi']);
Route::post('/updateInstansi', [adminController::class, 'updateInstansi']);

    //kategori
Route::get('/editKategori', [adminController::class, 'editKategori']);
Route::get('/createCategory', [KategoriLaporanController::class, 'createKategori']);
Route::post('storeKategori', [KategoriLaporanController::class,'storeKategori']);
Route::post('/updateKategori', [adminController::class, 'updateKategori']);
Route::post('/hapusKategori', [adminController::class, 'hapusKategori']);
});
