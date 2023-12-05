<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class KepsekController extends Controller
{
    function laporanAbsensi(){
        $dateNow = Carbon::now();
        $dateNow->timezone('Asia/Jakarta');
        $yearNow = $dateNow->format('Y');

        $dataAbsenJan = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '01')
        ->get();

        $dataAbsenFeb = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '02')
        ->get();

        $dataAbsenMar = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '03')
        ->get();

        $dataAbsenApr = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '04')
        ->get();

        $dataAbsenMei = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '05')
        ->get();

        $dataAbsenJun = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '06')
        ->get();


        

        $title = "Mengelola Data Penggajian";
        return view('kepala-sekolah.laporan', [
            'title' => $title, 
            'dataAbsenJan' => $dataAbsenJan,
            'yearNow' => $yearNow,
            'dataAbsenFeb'=>$dataAbsenFeb,
            'dataAbsenMar'=>$dataAbsenMar,
            'dataAbsenApr'=>$dataAbsenApr,
            'dataAbsenMei'=>$dataAbsenMei,
            'dataAbsenJun'=>$dataAbsenJun,
        ]);
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
