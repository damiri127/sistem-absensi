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
        return redirect('admin/mengelola_programstudi')->withSuccess('Data berhasil ditambahkan');
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
        return redirect('admin/mengelola_programstudi')->withSuccess('Data berhasil diubah');
    }

    function deleteProdi(Request $request){
        
        $data_kelas = DB::table('kelas')->where('id_prodi', $request->id_prodi)->first();

        if ($data_kelas == null){
            DB::table('programstudi')->where('id_prodi', $request->id_prodi)->delete();
            return redirect('admin/mengelola_programstudi')->withSuccess('Data berhasil dihapus');
        } else {
            return redirect('admin/mengelola_programstudi')->with('Data Gagal Dihapus');
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
        return redirect('admin/mengelola_kelas')->withSuccess('Data berhasil ditambahkan');
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
        return redirect('admin/mengelola_kelas')->withSuccess('Data berhasil diubah');
    }

    function deleteKelas(Request $request){
        DB::table('kelas')->where('id_kelas', $request->id_kelas)->delete();
        return redirect('admin/mengelola_kelas')->withSuccess('Data berhasil dihapus');
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
        return redirect('admin/mengelola_matapelajaran')->withSuccess('Data berhasil ditambahkan');
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
        return redirect('admin/mengelola_matapelajaran')->withSuccess('Data berhasil diubah');
    }

    function deleteMapel(Request $request){
        DB::table('matapelajaran')->where('id_mapel', $request->id_mapel)->delete();
        return redirect('admin/mengelola_matapelajaran')->withSuccess('Data berhasil dihapus');
    }
    
    
}
