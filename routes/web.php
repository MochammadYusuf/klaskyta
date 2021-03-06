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
	return view('dashboard');
});

Route::get('/rekapAbsensi', function () {
	return view('rekapAbsensi');
});

Route::get('/inputAbsensi', function () {
	return view('inputAbsensi');
});

Route::get('/cekAbsensi', function () {
	return view('cekAbsensi');
});

Route::get('about', function () {
    return 'this is about page';
});
