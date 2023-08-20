<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index (){
        return (view('admin.dashboard'));
    }

    public function mengelola_admin (){
        return (view('admin.mengelola_admin'));
    }

    public function tambah_admin(){
        return view('');
    }

    public function tambah_data_admin(Request $request){
        $data = new User();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->level = $request->level;
        $data->password = bcrypt($request->password);

        if($request->hasFile('image')){
            $request->file('image')->move('alamatfoto/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }else{
            $data->save();
        }
        return redirect('admin/mengelola_admin')->withSuccess('Data berhasil ditambahkan');
    }
}
