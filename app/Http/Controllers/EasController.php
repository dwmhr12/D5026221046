<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasController extends Controller
{
    public function indexKaryawan(){
        $karyawan = DB::table('karyawan')->paginate(10);
        return view('indexKaryawan',['karyawan' => $karyawan]);
    }

    public function hapusKaryawan($id){
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	return redirect('/karyawan');}

    public function tambahKaryawan(){
        return view('tambahKaryawan');
    }




    public function storeKaryawan(Request $request)
    {
        $existKaryawan = DB::table('karyawan')
        ->where('kodepegawai', $request->kodepegawai)
        ->first();

    if ($existKaryawan) {
        return redirect('/karyawan')->with('Maaf', 'Kode Pegawai sudah ada!');
    }
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
        'departemen' => $request->departemen
	]);
	return redirect('/karyawan');
    }

}
