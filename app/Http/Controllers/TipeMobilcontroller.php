<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipemobil;

class TipeMobilcontroller extends Controller
{
    function index()
    {
        $tipemobilData = tipemobil::get();
        return view ('pages.tipe_mobil.index',['tipemobilData'=> $tipemobilData]);
    }

    function create()
    {
        return view('pages.tipe_mobil.create');
    }

    function store(Request $request)
    {
        $tipemobilData = new tipeMobil;
        $tipemobilData->tipe = $request->tipe;
        $tipemobilData->save();

        return redirect()->to('/tipemobil')->with('success','Data tipe berhasil ditambahkan');
    }

    function formEdit($id)
    {
        $tipemobilData = TipeMobil::find($id);
        return view('pages.tipe_mobil.form_edit',['tipeMobilData'=> $tipemobilData]);
    }

    function update($id,Request $request)
    {
        $tipemobilData = TIpeMobil::find($id);
        $tipemobilData ->tipe = $request->tipe;
        $tipemobilData->save();

        return redirect()->to('/tipemobil')->with('success','Data tipe berhasil diupdate');
    }

    function delete($id)
    {
        $tipemobilData = TipeMobil::find($id);
        $tipemobilData->delete();

        return redirect()->to('/tipemobil')->with('success','Data tipe berhasil dihapus');
    }
}
