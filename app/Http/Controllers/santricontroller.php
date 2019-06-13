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
       return $request->all();
       
    }
}
