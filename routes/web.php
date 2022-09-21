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


Route::get('/user', function () {
    return view('user');
});

Route::get('/verifikasi', function () {
    return view('verifikasi');
});