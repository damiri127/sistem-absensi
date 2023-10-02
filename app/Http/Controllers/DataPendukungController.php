<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataPendukungController extends Controller
{
    /*
        Mencoba 
    */

    //============Mengelola data Program Studi=========================

    function mengelolaProgramStudi(){
        $data = DB::table('programstudi')->get();
        $title = "Mengelola Program Studi";
        return view('admin.datapendukung.programstudi.mengelola_programstudi', ['title' => $title, 'data' => $data]);
    }

    function tambah_prodi(){
        $title = "Tambah Prodi";
        return view('admin.datapendukung.programstudi.tambah_data_prodi', ['title'=>$title]);
    }

    function postTambahProdi(Request $request){
        $data = $request -> nama_prodi;
        DB::table('programstudi')->insert([
            'nama_prodi' => $data
        ]);
        return redirect('master-user/mengelola_programstudi')->withSuccess('Data berhasil ditambahkan');
    }

    function formEditProdi(Request $request){
        $data = DB::table('programstudi')->where('id_prodi', $request->id_prodi)->first();
        $title = "Edit Data Program Studi";
        return view('admin.datapendukung.programstudi.edit_data_prodi', ['data'=>$data, 'title'=>$title]);
    }

    function postEditProdi(Request $request){
        DB::table('programstudi')
            ->where('id_prodi', $request->id_prodi)
            ->update([
                'nama_prodi' => $request -> nama_prodi
            ]);
        return redirect('master-user/mengelola_programstudi')->withSuccess('Data berhasil diubah');
    }

    function deleteProdi(Request $request){
        
        $data_kelas = DB::table('kelas')->where('id_prodi', $request->id_prodi)->first();

        if ($data_kelas == null){
            DB::table('programstudi')->where('id_prodi', $request->id_prodi)->delete();
            return redirect('admin/mengelola_programstudi')->withSuccess('Data berhasil dihapus');
        } else {
            return redirect('master-user/mengelola_programstudi')->with('Data Gagal Dihapus');
        }
    }

    function infoProdi (Request $request){
        $data = DB::table('kelas')
                ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                ->where('programstudi.id_prodi', $request->id_prodi)
                ->get();
        $nama_prodi = DB::table('programstudi')->where('id_prodi', $request->id_prodi)->first();
        $title = "Informasi Kelas Program Studi";
        return view('admin.datapendukung.programstudi.info_programstudi', ['data' => $data, 'nama_prodi' => $nama_prodi, 'title'=>$title]);
    }


    //===========================DATA KELAS SISWA========================================
    
    function mengelolaDataKelas(){
        $data = DB::table('kelas')
                ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                ->get();
        $title = "Mengelola Data Kelas";
        return view('admin.datapendukung.kelas.mengelola_kelas', ['title' => $title, 'data' => $data]);
    }
    //FORM TAMBAH
    function tambah_kelas(){
        $data_prodi = DB::table('programstudi')->get();
        $title = "Tambah Kelas";
        return view('admin.datapendukung.kelas.tambah_data_kelas', ['title'=>$title, 'data_prodi'=>$data_prodi]);
    }

    function postTambahKelas(Request $request){
        DB::table('kelas')->insert([
            'tingkat_kelas' => $request->tingkat_kelas,
            'grup'=> $request->grup,
            'id_prodi'=>$request->id_prodi 
        ]);
        return redirect('master-user/mengelola_kelas')->withSuccess('Data berhasil ditambahkan');
    }

    function formEditKelas(Request $request){
        $data = DB::table('kelas')->where('id_kelas', $request->id_kelas)->first();
        $data_prodi = DB::table('programstudi')->get();
        $title = "Edit Data Kelas Siswa";
        return view('admin.datapendukung.kelas.edit_data_kelas', ['data'=>$data, 'title'=>$title, 'data_prodi'=>$data_prodi]);
    }

    function postEditKelas(Request $request){
        DB::table('kelas')
            ->where('id_kelas', $request->id_kelas)
            ->update([
                'tingkat_kelas' => $request->tingkat_kelas,
                'grup'=> $request->grup
            ]);
        return redirect('master-user/mengelola_kelas')->withSuccess('Data berhasil diubah');
    }

    function deleteKelas(Request $request){
        DB::table('kelas')->where('id_kelas', $request->id_kelas)->delete();
        return redirect('master-user/mengelola_kelas')->withSuccess('Data berhasil dihapus');
    }

    //======================MENGELOLA DATA MATA PELAJARAN=============================

    function mengelolaDataMataPelajaran(){
        $data = DB::table('matapelajaran')->get();
        $title = "Mengelola Data Mata Pelajaran";
        return view('admin.datapendukung.matapelajaran.mengelola_matapelajaran', ['title' => $title, 'data' => $data]);
    }

    function tambah_matapelajaran(){
        $title = "Tambah Mata Pelajaran";
        return view('admin.datapendukung.matapelajaran.tambah_data_mapel', ['title'=>$title]);
    }

    function postTambahMapel(Request $request){
        DB::table('matapelajaran')->insert([
            'nama_mapel'=> $request->nama_mapel
        ]);
        return redirect('master-user/mengelola_matapelajaran')->withSuccess('Data berhasil ditambahkan');
    }

    function formEditMapel(Request $request){
        $data = DB::table('matapelajaran')->where('id_mapel', $request->id_mapel)->first();
        $title = "Edit Data Mata Pelajaran";
        return view('admin.datapendukung.matapelajaran.edit_data_mapel', ['data'=>$data, 'title'=>$title]);
    }

    function postEditMapel(Request $request){
        DB::table('matapelajaran')
            ->where('id_mapel', $request->id_mapel)
            ->update([
                'nama_mapel' => $request -> nama_mapel
            ]);
        return redirect('master-user/mengelola_matapelajaran')->withSuccess('Data berhasil diubah');
    }

    function deleteMapel(Request $request){
        DB::table('matapelajaran')->where('id_mapel', $request->id_mapel)->delete();
        return redirect('master-user/mengelola_matapelajaran')->withSuccess('Data berhasil dihapus');
    }

    //====================Mengelola data Jadwal Pembelajaran===============================

    function mengelolaDataJadwal(){
        $data = DB::table('jadwal')
                ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                ->get();
        $title = "Mengelola Data Kelas";
        return view('admin.datapendukung.jadwalpembelajaran.mengelola_jadwal', ['title' => $title, 'data' => $data]);
    }

    function tambah_jadwal(){
        $data_mapel = DB::table('matapelajaran')->get();
        $data_kelas = DB::table('kelas')
                    ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                    ->get();
        $data_guru = DB::table('users')->where('level', 'Guru')->get();
        $title = "Tambah Kelas";
        return view('admin.datapendukung.jadwalpembelajaran.tambah_data_jadwal', ['title'=>$title, 'data_mapel'=>$data_mapel, 'data_guru'=>$data_guru, 'data_kelas'=>$data_kelas]);
    }

    function postTambahJadwal(Request $request){
        //Konversi string -> menit
        $jam_mulai = strtotime($request->jam_mulai);
        $jam_selesai = strtotime($request->jam_selesai);
        
        //Get selisih + konversi to menit
        $selisih = date($jam_selesai - $jam_mulai) / 60 ; 

        //get menit actual 
        $menit_jp = $selisih;

        //inisialisasi satu_jp = 40 
        $satu_jp = 40;
        $jam_jadwal = 1 ; //untuk setiap 40 menit = 1 jam mapel
        $total_jp = 0 ; //inisiasi awal $total_jp = 0
        while ($menit_jp>=40){  
            if ($menit_jp == $satu_jp){
                $total_jp = $jam_jadwal ;
                $menit_jp = 0 ;  
            } else {
                $jam_jadwal = $jam_jadwal + 1;
                $satu_jp = $satu_jp + 40 ;
                
                if ($satu_jp>200){
                    $menit_jp = 0;
                    $total_jp = 0;
                }
            }
        }
        if ($total_jp == 0) {
            return redirect('admin/mengelola_jadwalpelajaran')->withSuccess('Data gagal ditambahkan!');
        } else {
            DB::table('jadwal')->insert([
                'hari' => $request->hari,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'id_mapel' => $request->id_mapel,
                'id_kelas' => $request->id_kelas,
                'id_guru' => $request->id_guru,
                'total_jp' => $total_jp
            ]);
            return redirect('master-user/mengelola_jadwalpelajaran')->withSuccess('Data berhasil ditambahkan');   
        }
    }


    function formEditJadwal(Request $request){
        $data_mapel = DB::table('matapelajaran')->get();
        $data = DB::table('jadwal')->where('id_jadwal', $request->id_jadwal)->first();
        $data_kelas = DB::table('kelas')
                    ->leftJoin('programstudi', 'kelas.id_prodi', '=', 'programstudi.id_prodi')
                    ->get();
        $data_guru = DB::table('users')->where('level', 'Guru')->get();            
        $title = "Edit Data Jadwal Pembelajaran";
        return view('admin.datapendukung.jadwalpembelajaran.edit_data_jadwal', [
            'data'=>$data, 
            'title'=>$title, 
            'data_mapel'=>$data_mapel, 
            'data_kelas'=>$data_kelas, 
            "data_guru"=>$data_guru]);
    }

    function postEditJadwal(Request $request){
        //Konversi string -> menit
        $jam_mulai = strtotime($request->jam_mulai);
        $jam_selesai = strtotime($request->jam_selesai);
        
        //Get selisih + konversi to menit
        $selisih = date($jam_selesai - $jam_mulai) / 60 ; 

        if($selisih%40 != 0){
            return redirect('master-user/edit_data_jadwal/'.$request->id_jadwal)->withSuccess('Pastikan total jam pembelajaran kelipatan 40 menit');
        } else{
            $total_jp = $selisih / 40;
            DB::table('jadwaL')->where('id_jadwal',$request->id_jadwal)->update([
                'total_jp' => $total_jp,
                'hari' => $request->hari,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'id_mapel' => $request->id_mapel,
                'id_kelas' => $request->id_kelas,
                'id_guru' => $request->id_guru,
            ]);
            return redirect('master-user/mengelola_jadwalpelajaran')->withSuccess('Data berhasil diubah');
        }
    }

    function deleteJadwal(Request $request){
        DB::table('jadwal')->where('id_jadwal', $request->id_jadwal)->delete();
        return redirect('master-user/mengelola_jadwalpelajaran')->withSuccess('Data berhasil dihapus');
    }

    //================HITUNG PENGGAJIAN=================================================================
    
    function mengelolaDataPenggajian(){
        $data = DB::table('penggajian')->get();
        $title = "Mengelola Data Penggajian";
        return view('admin.datapendukung.hitunganpenggajian.mengelola_penggajian', ['title' => $title, 'data' => $data]);
    }

    function formEditPenggajian(Request $request){
        $data = DB::table('penggajian')->where('id_penggajian', $request->id_penggajian)->first();
        $title = "Edit Data Penggajian";
        return view('admin.datapendukung.hitunganpenggajian.edit_data_penggajian', ['data'=>$data, 'title'=>$title]);
    }

    function postEditPenggajian(Request $request){
        DB::table('penggajian')
            ->where('id_penggajian', $request->id_penggajian)
            ->update([
                'total_gaji' => $request -> total_gaji
            ]);
        return redirect('master-user/mengelola_penggajian')->withSuccess('Data berhasil diubah');
    }

    function mengelolaDataAbsensi(){
        $data = DB::table('absensi')
                ->leftJoin('jadwal', 'absensi.id_jadwal', '=', 'jadwal.id_jadwal')
                ->leftJoin('users', 'jadwal.id_guru', '=', 'users.id')
                ->leftJoin('matapelajaran', 'jadwal.id_mapel', '=', 'matapelajaran.id_mapel')
                ->leftJoin('penggajian', 'absensi.id_penggajian', '=', 'penggajian.id_penggajian')
                ->get();
        $title = "Mengelola Data Penggajian";
        return view('admin.datapendukung.dataabsensi.mengelola_absensi', ['title' => $title, 'data' => $data]);
    }



}
