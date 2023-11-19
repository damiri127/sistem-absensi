<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TahunAjaranController extends Controller
{
    function index(){
        $title = "Tahun Ajaran";
        $data = DB::table("tahun_ajaran")->get();
        return view('admin.mengelola_tahun_ajaran', ['title'=> $title, 'data'=>$data]);
    }

    function create(){
        $title = 'Tambah Tahun Ajaran';
        return view('admin.create_tahun_ajaran', ['title'=> $title]);
    }

    function insert(Request $request){
        DB::table('tahun_ajaran')->insert([
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_selesai' => $request->tahun_selesai,
            'isSemesterGanjil'=>$request->isSemesterGanjil
        ]);

        return redirect('master-user/mengelola_tahun_ajaran')->withSuccess('Data berhasil ditambahkan');
    }

    function edit(Request $request){
        $title = 'Edit Tahun Ajaran';
        $data = DB::table('tahun_ajaran')->where('id_tahun_ajaran', $request->id_tahun_ajaran)->first();

        return view('admin.edit_tahun_ajaran', ['title'=> $title, 'data'=> $data]);

    }

    function update(Request $request){
        DB::table('tahun_ajaran')->where('id_tahun_ajaran', $request->id_tahun_ajaran)->update([
            'tahun_mulai'=>$request->tahun_mulai,
            'tahun_selesai'=>$request->tahun_selesai, 
            'isSemesterGanjil'=>$request->isSemesterGanjil
        ]);
        return redirect('master-user/mengelola_tahun_ajaran')->withSuccess('Data berhasil diubah');
    }

    function delete(Request $request){
        DB::table('tahun_ajaran')->where('id_tahun_ajaran', $request->id_tahun_ajaran)->delete();
        return redirect('master-user/mengelola_tahun_ajaran')->withSuccess('Data berhasil dihapus');

    }
}
