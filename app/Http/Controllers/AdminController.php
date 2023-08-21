<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index (){
        return (view('admin.dashboard'));
    }

    public function mengelola_admin (){
        $data = DB::table('users')->where('level', 'admin')->get();
        $title = "Admin | Mengelola data Admin";
        return (view('admin.mengelola_admin', ['data'=> $data, 'title' => $title]));
    }

    public function form_tambah_admin(){
        return (view('admin.tambah_data_admin'));
    }

    public function tambah_admin(Request $request){
        $data = new User();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->level = 'admin';
        $data->password = bcrypt($request->password);

        if($request->hasFile('image')){
            $request->file('image')->move('fotoadmin/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }else{
            $data->save();
        }
        return redirect('admin/mengelola_admin')->withSuccess('Data berhasil ditambahkan');
    }
    
    function form_edit_admin(Request $request){
        $data = DB::table('users')->where('id',$request->id )->first();

        return view('admin.edit_data_admin',['data'=>$data]);
    }

    function edit_admin(Request $request, $id){
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('admin/mengelola_admin')->withSuccess('Data berhasil diubah');
    }
}
