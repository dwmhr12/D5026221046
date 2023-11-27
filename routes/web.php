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
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang</h1>";
});

Route::get('/blog2', function () {
    return view('blog');
});

Route::get('/hello', function () {
    return view('HelloPertemuan1');
});

Route::get('/link', function () {
    return view('linkPertemuan1');
});

Route::get('/news', function () {
    return view('newsPertemuan1');
});

Route::get('/style', function () {
    return view('stylePertemuan1');
});

Route::get('/1', function () {
    return view('1Pertemuan2');
});

Route::get('/berita', function () {
    return view('beritaPertemuan2');
});

Route::get('/link2', function () {
    return view('linkPertemuan2');
});

Route::get('/news2', function () {
    return view('newsPertemuan2');
});

Route::get('/style2', function () {
    return view('stylePertemuan2');
});

Route::get('/js1', function () {
    return view('js1Pertemuan5');
});

Route::get('/js2', function () {
    return view('js2Pertemuan5');
});

Route::get('/validasi1', function () {
    return view('validasi1Pertemuan5');
});

Route::get('/surabaya', function () {
    return view('Tugas');
});

Route::get('/latihan', function () {
    return view('latihan1');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/rapep', function () {
    return view('latihanr');
});

// Route::get('dosen', 'DosenController@index');


// Route::get('pegawai', 'PegawaiController@index');

// Route::get('Rani', 'RaniController@index');

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('showBlog', 'App\Http\Controllers\DosenController@showblog');

// Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@showNama');

#mebuka form
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');

#mengakses view
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


	
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

