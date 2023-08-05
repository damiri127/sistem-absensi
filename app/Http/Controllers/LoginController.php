<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    //fungsi autentikasi login
    public function authenticate(Request $request){
        // validasi akun 
        $credential = $request->validate([
            //table
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            //redirect berdasarkan level user
            if(auth()->user()->level == ""){
                return redirect()->intended();
            }else{
                // kondisi untuk user lain 
            }
        }
    }
}
