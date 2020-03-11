<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        return Kategori::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string'
        ]);
        $data = new Kategori([
            'nama' => $request->nama
        ]);
        $data->save();
        return Kategori::all();
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string'
        ]);
        $data = Kategori::find($id);
        $data->nama = $request->nama;
        $data->save();
        return Kategori::all();
    }
    public function destroy($id){
	    $data = Kategori::find($id);
	    $data->delete();
	    return Kategori::all();
	}
}
