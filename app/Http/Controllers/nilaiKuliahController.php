<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaiKuliahController extends Controller
{
    public function indexnilaikuliah2()
    {
    	$nilaikuliah2 = DB::table('nilaikuliah2')->get();
    	return view('indexnilaikuliah2',['nilaikuliah2' => $nilaikuliah2]);
 
    }
    public function tambahData(){
        return view('tambahData');
    }

    public function storeData(Request $request){
        DB::table('nilaikuliah2')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);
        return redirect('/nilaikuliah');
    }
}
