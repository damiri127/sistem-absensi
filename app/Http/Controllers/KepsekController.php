<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KepsekController extends Controller
{
    function laporanAbsensi(){
        $data = DB::table('absensi')
                ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
                ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
                ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                ->leftJoin('penggajian', 'absensi.id_penggajian', '=', 'penggajian.id_penggajian')
                ->get();
        $title = "Mengelola Data Penggajian";
        return view('kepala-sekolah.laporan', ['title' => $title, 'data' => $data]);
    }

    function show (Request $request){
        $id = $request -> user()->id;
        $data = User::find($id);
        return view('kepala-sekolah.info_profile', ['data'=>$data]);
    }

    function formEdit (Request $request){
        $id = $request -> user()->id;
        $data = User::find($id);
        return view('kepala-sekolah.edit', ['data'=>$data]);
    }

    function update(Request $request)
    {
        $id = $request -> user()->id;
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        // $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('/kepala-sekolah/profile')->withSuccess('Data berhasil diubah');
    }
}
