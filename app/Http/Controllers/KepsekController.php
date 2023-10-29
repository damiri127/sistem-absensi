<?php

namespace App\Http\Controllers;

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
}
