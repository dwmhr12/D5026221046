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
    return view('indexUTS');
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

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


	
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');



// Tugas Pra EAS
Route::get('/masker','App\Http\Controllers\MaskerController@indexPraEAS');
Route::get('/masker/tambahMasker','App\Http\Controllers\MaskerController@tambahPraEAS');
Route::post('/masker/storeMasker','App\Http\Controllers\MaskerController@storePraEAS');
Route::get('/masker/editMasker/{id}','App\Http\Controllers\MaskerController@editPraEAS');
Route::post('/masker/updateMasker','App\Http\Controllers\MaskerController@updatePraEAS');
Route::get('/masker/hapusMasker/{id}','App\Http\Controllers\MaskerController@hapusPraEAS');
Route::get('/masker/viewMasker/{id}','App\Http\Controllers\MaskerController@viewPraEAS');
Route::get('/masker/cariMasker','App\Http\Controllers\MaskerController@cariPraEAS');


//NilaiKuliah
Route::get('/nilaikuliah','App\Http\Controllers\nilaiKuliahController@indexnilaikuliah2');
Route::get('/nilaikuliah/tambahData','App\Http\Controllers\nilaiKuliahController@tambahData');
Route::post('/nilaikuliah/storeData','App\Http\Controllers\nilaiKuliahController@storeData');


//EAS
Route::get('/karyawan','App\Http\Controllers\EASController@indexKaryawan');
Route::get('/karyawan/hapusKaryawan/{id}','App\Http\Controllers\EASController@hapusKaryawan');
Route::get('/karyawan/tambahKaryawan','App\Http\Controllers\EASController@tambahKaryawan');
Route::post('/karyawan/storeKaryawan','App\Http\Controllers\EASController@storeKaryawan');



