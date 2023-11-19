<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RiwayatAbsensiController extends Controller
{
    function index (){
        $title = 'Riwayat Absensi';
        $tahun_ajaran = DB::table('tahun_ajaran')->orderBy('id_tahun_ajaran', 'desc')->get();
        return view('admin.datapendukung.riwayatabsensi.riwayat_absensi', ['tahun_ajaran' => $tahun_ajaran, 'title' => $title]);
    }
    
    function getRiwayat(Request $request){
        $tahun_ajaran = DB::table('tahun_ajaran')->where('id_tahun_ajaran', '=', $request->id_tahun_ajaran)->first();
        $title = 'Riwayat Absensi';
        $dataAbsen = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->get();
        return view('admin.datapendukung.riwayatabsensi.riwayat_absensi_by_semester', ['tahun_ajaran'=>$tahun_ajaran, 'dataAbsen'=>$dataAbsen, 'title'=>$title]);
    }
}
