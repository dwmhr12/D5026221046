<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaskerController extends Controller
{
    public function indexPraEAS(){
        $masker = DB::table('masker')->paginate(10);
        return view('indexPraEAS',['masker' => $masker]);
    }

    public function tambahPraEAS(){
        return view('tambahPraEAS');
    }

    public function storePraEAS(Request $request){
        DB::table('masker')->insert([
            'masker_merkmasker' => $request->masker_merkmasker,
            'masker_stockmasker' => $request->masker_stockmasker,
            'masker_tersedia' => $request->masker_tersedia,
        ]);
        return redirect('/masker');
    }

    public function editPraEAS($id){
	$masker = DB::table('masker')->where('masker_kodemasker',$id)->get();
	return view('editPraEAS',['masker' => $masker]);
}

public function updatePraEAS(Request $request)
{
	DB::table('masker')->where('masker_kodemasker',$request->id)->update([
		'masker_merkmasker' => $request->masker_merkmasker,
		'masker_stockmasker' => $request->masker_stockmasker,
		'masker_tersedia' => $request->masker_tersedia
	]);
	return redirect('/masker');
}

public function hapusPraEAS($id)
{
	DB::table('masker')->where('masker_kodemasker',$id)->delete();

	return redirect('/masker');
}

public function viewPraEAS($id){
    $masker = DB::table('masker')
            ->where('masker_kodemasker',$id)
            ->get();
        return view('viewPraEAS',['masker' => $masker]);

}

public function cariPraEAS(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		$masker = DB::table('masker')
		->where('masker_merkmasker','like',"%".$cari."%")
		->paginate();
 
		return view('indexPraEAS',['masker' => $masker]);
 
	}




}
