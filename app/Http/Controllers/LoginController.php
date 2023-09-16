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
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            //redirect berdasarkan level user
            if(auth()->user()->level === "Admin"){
                return redirect()->intended("master-user");
            }else if(auth()->user()->level == "Guru"){
                return redirect()->intended("guru");
            }else if(auth()->user()->level == "Kepala Sekolah"){
                return redirect()->intended("kepala-sekolah");
            }else if(auth()->user()->level == "Tata Usaha"){
                return redirect()->intended("master-user");
            }
        }
        return back()->withErrors('Mohon periksa kembali email dan passwordnya!');
    }

    public function logoutAction(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
