<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Akun;

class AkunController extends Controller
{
   public function index()
    {
        return Akun::all();
    }
    public function store(Request $request)
    {
        $request->validate([
        	'nama' => 'required|string',
            'jenis' => 'required|string'
        ]);
        $data = new Akun([
        	'nama' => $request->nama,
            'jenis' => $request->jenis
        ]);
        $data->save();
        return Akun::all();
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'jenis' => 'required|string'
        ]);
        $data = Akun::find($id);
        $data->nama = $request->nama;
        $data->jenis = $request->jenis;
        $data->save();
        return Akun::all();
    }
    public function destroy($id){
	    $data = Akun::find($id);
	    $data->delete();
	    return Akun::all();
	}
}