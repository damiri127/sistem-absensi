<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardGuruController extends Controller
{
    
    public function indexAction(Request $request){

        $dateNow = Carbon::now();
        $dateNow->timezone('Asia/Jakarta');
        $dayNow = $dateNow->dayName;
        $tahun_ajaran = DB::table('tahun_ajaran')->orderBy('id_tahun_ajaran', 'desc')->first();
        
        switch ($dayNow){
            case "Monday":
                $dayNow = "Senin";
                break;
            case "Tuesday":
                $dayNow = "Selasa";
                break;
            case "Wednesday":
                $dayNow = "Rabu";
                break;
            case "Thursday":
                $dayNow = "Kamis";
                break;
            case "Friday":
                $dayNow = "Jumat";
                break;
            case "Saturday":
                $dayNow = "Sabtu";
                break;
            case "Sunday":
                $dayNow = "Minggu";
                break;
            default:
                $dayNow = "Hari Kiamat";
        }
        $date = $dateNow -> format("d M Y H:i:s");
        $dateInfo = $dateNow->format('Y-m-d');
        $time = $dateNow -> format("H:i:s");
        $getIdGuru = auth()->user()->id;
        $dataAbsenToday = DB::table('absensi')
                        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal') 
                        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
                        ->where('waktu_absensi', $dateInfo)
                        ->where('jadwal.id_guru', $getIdGuru)
                        ->get();

        $count = $dataAbsenToday->count();

        $data = DB::table('jadwal')
                ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
                ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
                ->where('jadwal.hari', $dayNow)
                ->where('id_guru', $getIdGuru)
                ->orderBy('jam_mulai', 'asc')->get();
        $index = 0;

        return view('guru.index', [
            'name' => 'dashboard-guru',
            'dayName' => $dayNow,
            "dateTime"=>$date,
            'time'=>$time,
            'data'=>$data,
            'dataAbsenToday' => $dataAbsenToday,
            'count'=>$count,
            'index'=>$index
        ]);
    }

    function show (Request $request){
        $id = $request -> user()->id;
        $data = User::find($id);
        return view('guru.info_profile', ['data'=>$data]);
    }

    function Formedit (Request $request){
        $id = $request -> user()->id;
        $data = User::find($id);
        return view('guru.edit', ['data'=>$data]);
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

        return redirect('/guru/profile')->withSuccess('Data berhasil diubah');
    }

    function absen(Request $request){
        $dateNow = Carbon::now();
        $dateNow->timezone('Asia/Jakarta');
        $dayNow = $dateNow->dayName;
        $idJadwal = $request->id_jadwal;
        
        switch ($dayNow){
            case "Monday":
                $dayNow = "Senin";
                break;
            case "Tuesday":
                $dayNow = "Selasa";
                break;
            case "Wednesday":
                $dayNow = "Rabu";
                break;
            case "Thursday":
                $dayNow = "Kamis";
                break;
            case "Friday":
                $dayNow = "Jumat";
                break;
            case "Saturday":
                $dayNow = "Sabtu";
                break;
            case "Sunday":
                $dayNow = "Minggu";
                break;
            default:
                $dayNow = "Hari Kiamat";
        }
        $date = $dateNow -> format("d M Y H:i:s");
        $time = $dateNow -> format("H:i:s");
        $dateInfo = $dateNow->format('Y-m-d');
        $getIdGuru = auth()->user()->id;
        $data = DB::table('jadwal')
                ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
                ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                ->where('hari', $dayNow)->where('id_guru', $getIdGuru)->where('id_jadwal', $idJadwal)->first();

        $absenNow = DB::table('absensi')->select('id_absensi')->where('id_jadwal', $idJadwal)->where('waktu_absensi',$dateInfo)->first();

        return view('guru.absen',['name' => 'absen',
                                'dayName' => $dayNow,
                                "dateTime"=>$date,
                                'time'=>$time,
                                'data'=>$data,
                                'dataAbsen' =>$absenNow,
                            ]);        
    }


    function postAbsen(Request $request){
        $keterangan = $request->keterangan;
        $date = Carbon::now();
        $dateNow = $date->timezone('Asia/Jakarta');
        $id_jadwal = $request->id_jadwal;
        $penggajian = DB::table('penggajian')->where('id_penggajian', $keterangan)->first();
        $total_jp = DB::table('jadwal')->where('id_jadwal', $id_jadwal)->first();
        $pendapatan = $total_jp->total_jp * $penggajian->total_gaji;

        DB::table('absensi')->insert([
            'waktu_absensi'=>$dateNow,
            'id_jadwal'=>$id_jadwal,
            'id_penggajian'=>$keterangan,
            'pendapatan'=>$pendapatan
        ]);

        return redirect('/dashboard-guru')->withSuccess('Berhasil Absensi');

    }

    function getJadwal(){
        $getIdGuru = auth()->user()->id;
        $tahun_ajaran = DB::table('tahun_ajaran')->orderBy('id_tahun_ajaran', 'desc')->first();

        $jadwalSenin = DB :: table('jadwal')->where('hari', 'Senin')->where('id_guru', $getIdGuru)
                                            ->leftJoin('matapelajaran','jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                                            ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
                                            ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                                            ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
                                            ->get();

        $jadwalSelasa = DB :: table('jadwal')->where('hari', 'Selasa')->where('id_guru', $getIdGuru)
                                            ->leftJoin('matapelajaran','jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                                            ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
                                            ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                                            ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
                                            ->get();

        $jadwalRabu = DB :: table('jadwal')->where('hari', 'Rabu')->where('id_guru', $getIdGuru)
                                        ->leftJoin('matapelajaran','jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                                        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
                                        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                                        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
                                        ->get();

        $jadwalKamis = DB :: table('jadwal')->where('hari', 'Kamis')->where('id_guru', $getIdGuru)
                                            ->leftJoin('matapelajaran','jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                                            ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
                                            ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                                            ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
                                            ->get();

        $jadwalJumat = DB :: table('jadwal')->where('hari', 'Jumat')->where('id_guru', $getIdGuru)
                                            ->leftJoin('matapelajaran','jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                                            ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
                                            ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                                            ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
                                            ->get();

        $jadwalSabtu = DB :: table('jadwal')->where('hari', 'Sabtu')->where('id_guru', $getIdGuru)
                                            ->leftJoin('matapelajaran','jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                                            ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
                                            ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                                            ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
                                            ->get();
        
        
                                        
        
        return view('guru.jadwal', [
            'jadwalSenin'=>$jadwalSenin,
            'jadwalSelasa'=>$jadwalSelasa,
            'jadwalRabu'=>$jadwalRabu,
            'jadwalKamis'=>$jadwalKamis,
            'jadwalJumat'=> $jadwalJumat,
            'jadwalSabtu'=>$jadwalSabtu,
            'tahun_ajaran'=>$tahun_ajaran
        ]);
    }

    function riwayatAbsensi(){

        $dateNow = Carbon::now();
        $dateNow->timezone('Asia/Jakarta');
        $yearNow = $dateNow->format('Y');
        $tahun_ajaran = DB::table('tahun_ajaran')->orderBy('id_tahun_ajaran', 'desc')->first();


        $dataAbsenJan = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '01')
        ->get();

        $dataAbsenFeb = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '02')
        ->get();

        $dataAbsenMar = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '03')
        ->get();

        $dataAbsenApr = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '04')
        ->get();

        $dataAbsenMei = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '05')
        ->get();

        $dataAbsenJun = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '06')
        ->get();

        $dataAbsenJul = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '07')
        ->get();

        $dataAbsenAugust = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '08')
        ->get();

        $dataAbsenSept = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '09')
        ->get();

        $dataAbsenOct = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '10')
        ->get();

        $dataAbsenNov = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '11')
        ->get();

        $dataAbsenDec = DB::table('absensi')
        ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
        ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
        ->leftJoin('kelas', 'jadwal.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
        ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
        ->where('jadwal.id_tahun_ajaran', $tahun_ajaran->id_tahun_ajaran)
        ->where('jadwal.id_guru', auth()->user()->id)
        ->whereYear('waktu_absensi', $yearNow)
        ->whereMonth('waktu_absensi', '12')
        ->get();


        $title = "Mengelola Data Penggajian";
        return view('guru.history_absensi', [
            'title' => $title, 
            'tahun_ajaran' => $tahun_ajaran,
            'dataAbsenJan' => $dataAbsenJan,
            'yearNow' => $yearNow,
            'dataAbsenFeb'=>$dataAbsenFeb,
            'dataAbsenMar'=>$dataAbsenMar,
            'dataAbsenApr'=>$dataAbsenApr,
            'dataAbsenMei'=>$dataAbsenMei,
            'dataAbsenJun'=>$dataAbsenJun,
            'dataAbsenJul'=>$dataAbsenJul,
            'dataAbsenAugust'=>$dataAbsenAugust,
            'dataAbsenSept'=>$dataAbsenSept,
            'dataAbsenOct'=>$dataAbsenOct,
            'dataAbsenNov'=>$dataAbsenNov,
            'dataAbsenDec'=>$dataAbsenDec             
        ]);
    
    }


}
