<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    function index()
    {
        return view('pages.auth.register');

    }

    function register(Request $request)
    {
        //validasi input
        $validateUser =$request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'contact'=> 'required',
            'password'=> 'required',
        ]);

        //simpan ke datebase
        $userData= new User;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->contact = $request->contact;
        $userData->password =bcrypt($request->password);
        $userData->save();

        //redirect
        return redirect()->to('/login')->with('/success','berhasil register');

    }
}
