<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class santricontroller extends Controller
{
    public function index()
    {
        $data_santri = \App\santri::all();
        return view('santri.index',['data_santri' => $data_santri]);
    }
    public function create(Request $request)
    {
       \App\santri::create($request->all());
       return redirect('/santri')->with('sukses','Data berhasil diinput');
       
    }
    public function edit($id)
    {
        $santri = \App\santri::find($id);
        return view('santri/edit',['santri' => $santri]);
    }
    public function update(Request $request,$id)
    {
        $santri = \App\santri::find($id);
        $santri->update($request->all()); 
        return redirect('/santri')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $santri = \App\santri::find($id);
        $santri->delete($santri);
        return redirect('/santri')->with('sukses','Data berhasil dihapus');
    }
}
