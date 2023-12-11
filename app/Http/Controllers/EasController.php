<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

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

    public function store(Request $request)
    {
        //Pesan Validasi
    $messages = [
        'kodepegawai.unique' => ']Kode karyawan sudah tersedia.',
    ];

    // Validasi input
    $request->validate([
        'kodepegawai' => [
            'required',
            'max:5',
            Rule::unique('karyawan', 'kodepegawai'),
        ],
        'namalengkap' => 'required|max:50',
        'divisi' => 'required|max:20',
        'departemen' => 'required|max:20',
    ], $messages);

    DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);

    //alert berhasil
    return redirect('/karyawan')->with('success', 'Data karyawan berhasil ditambahkan.');
    }



}
