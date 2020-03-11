<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Subkategori;

class SubkategoriController extends Controller
{
   public function index()
    {
        return Subkategori::all();
    }
    public function store(Request $request)
    {
        $request->validate([
        	'kategori_id' => 'required|number',
            'nama' => 'required|string'
        ]);
        $data = new Subkategori([
        	'kategori_id' => $request->kategori_id,
            'nama' => $request->nama
        ]);
        $data->save();
        return Subkategori::all();
    }
    public function update(Request $request, $id)
    {
        $request->validate([
        	'kategori_id' => 'required|number',
            'nama' => 'required|string'
        ]);
        $data = Subkategori::find($id);
        $data->kategori_id = $request->kategori_id;
        $data->nama = $request->nama;
        $data->save();
        return Subkategori::all();
    }
    public function destroy($id){
	    $data = Subkategori::find($id);
	    $data->delete();
	    return Subkategori::all();
	}
}