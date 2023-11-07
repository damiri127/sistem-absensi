<?php

namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;
//use DB;

class DashboardController extends Controller
{
    public function index (){
        $title = "Beranda";
        $now = Carbon::now();
        $now->timezone('Asia/Jakarta');
        $jumlah_user = DB::table('users')->count();
        $jumlah_kelas = DB::table('kelas')->count();
        $jumlah_jadwal = DB::table('jadwal')->count();
        $jumlah_absensi = DB::table('absensi')->count();
        return (view('master-user.dashboard', [
            'title' => $title, 
            'now' => $now, 
            'jumlah_user' => $jumlah_user,
            'jumlah_kelas' => $jumlah_kelas,
            'jumlah_jadwal' => $jumlah_jadwal,
            'jumlah_absensi'=> $jumlah_absensi
        ]));
    }

    public function indexkepsek(){
        $title = 'Beranda';
        return (view('kepala-sekolah.index', [
            'title'=> $title
        ]));
    }

}
