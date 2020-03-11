<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Tag;

class TagController extends Controller
{
   public function index()
    {
        return Tag::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string'
        ]);
        $data = new Tag([
            'nama' => $request->nama
        ]);
        $data->save();
        return Tag::all();
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string'
        ]);
        $data = Tag::find($id);
        $data->nama = $request->nama;
        $data->save();
        return Tag::all();
    }
    public function destroy($id){
	    $data = Tag::find($id);
	    $data->delete();
	    return Tag::all();
	}
}
