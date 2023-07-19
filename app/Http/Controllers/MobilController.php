<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    function index()
    {
        return view('index');
    }

    function create()
    {
        return view('mobil.create');
    }

    function store(Request $request)
    {
        $dataMobil =[
            [
                'nama_mobil' =>'hijet',
                'merekMobil' =>'Daihatsu',
                'CC'=>'10000cc'
            ]
        ];

        $namaMobil =$request->nama_mobil;
        $merekMobil =$request->merek_mobil;
        $CC =$request->cc;

        $arrayMobil =[
            'nama_mobil'=>$namaMobil,
            'merekMobil'=>$merekMobil,
            'CC'=> $CC,
        ];

        array_push($dataMobil, $arrayMobil);
        return view('mobil.index', compact('dataMobil'));
    }
}