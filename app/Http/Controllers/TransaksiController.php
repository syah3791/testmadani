<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        return Transaksi::all();
    }
    public function store(Request $request)
    {
        $request->validate([
        	'akun_id' => 'required|number',
	        'tanggal' => 'required|date',
	        'kategori_id' => 'required|number',
	        'subkategori_id' => 'required|string',
	        'tag_id' => 'required|number',
	        'nominal' => 'required|number',
	        'keterangan' => 'required|string',
	        'user_id' => 'required|number'
        ]);
		/*
        $date = new Courses;
        $now = date('Y-m-d H:i'); //Fomat Date and time
        $now = $request->couese_date;
		*/
        $data = new Transaksi([
        	'akun_id' => $request->akun_id,
	        'tanggal' => $request->tanggal,
	        'kategori_id' => $request->kategori_id,
	        'subkategori_id' => $request->subkategori_id,
	        'tag_id' => $request->tag_id,
	        'nominal' => $request->nominal,
	        'keterangan' => $request->keterangan,
	        'user_id' => $request->user_id
        ]);
        $data->save();
        return Transaksi::all();
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'akun_id' => 'required|number',
	        'tanggal' => 'required|date',
	        'kategori_id' => 'required|number',
	        'subkategori_id' => 'required|string',
	        'tag_id' => 'required|number',
	        'nominal' => 'required|number',
	        'keterangan' => 'required|string',
	        'user_id' => 'required|number'
        ]);
        $data = Transaksi::find($id);
        $data->akun_id = $request->akun_id;
	    $data->tanggal = $request->tanggal;
	    $data->kategori_id = $request->kategori_id;
	    $data->subkategori_id = $request->subkategori_id;
	    $data->tag_id = $request->tag_id;
	    $data->nominal = $request->nominal;
	    $data->keterangan = $request->keterangan;
	    $data->user_id = $request->user_id;
        $data->save();
        return Transaksi::all();
    }
    public function destroy($id){
	    $data = Transaksi::find($id);
	    $data->delete();
	    return Transaksi::all();
	}
}