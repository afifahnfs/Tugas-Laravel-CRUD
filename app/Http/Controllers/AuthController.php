<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
        return view('register');
    }
    public function welcome1_post(Request $request){
        // dd($request->all());
        $nama_depan = $request["nama_depan"];
        $nama_belakang = $request["nama_belakang"];
        return view('welcome1', ['nama_depan'=> $nama_depan],['nama_belakang'=> $nama_belakang]);
    }
    
}
