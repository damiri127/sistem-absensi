<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index (){
        $title = "Beranda";
        return (view('admin.dashboard', ['title' => $title]));
    }

    public function mengelola_admin (){
        $data = DB::table('users')->where('level', 'admin')->get();
        $title = "Mengelola data Admin";
        return (view('admin.mengelola_admin', ['data'=> $data, 'title' => $title]));
    }

    public function form_tambah_admin(){
        $title = "Tambah Admin";
        return (view('admin.tambah_data_admin', ['title' => $title]));
    }

    public function tambah_admin(Request $request){
        $data = new User();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->level = 'Admin';
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
        $data = DB::table('users')->where('id', $request->id)->first();
        $title = "Edit Data Admin $data->nama";
        return view('admin.edit_data_admin',['data'=>$data, 'title'=>$title]);
    }

    function edit_admin(Request $request, $id){
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        // $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->password = bcrypt($request->password);
        if($request->hasFile('image')){
            $request->file('image')->move('fotoadmin/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }else{
            $data->save();
        }

        return redirect('admin/mengelola_admin')->withSuccess('Data berhasil diubah');
    }

    function info_admin(Request $request){
        $data = DB::table('users')->where('id',$request->id )->first();
        $title = "Info Admin $data->nama";
        return view('admin.info_admin',['data'=>$data, 'title'=>$title]);
    }

    function hapus_admin(Request $request){
        $data2 = User::find($request->id);
        $data2->delete();
        return redirect()->back()->withSuccess('Data berhasil dihapus!');
    }

    //=================================================================================================================//
    // CRUD TU 
    //Nama fungsi coba pake camel case kaya Kotlin bang hwhw
    public function mengelolaTataUsaha (){
        $data = DB::table('users')->where('level', 'Tata Usaha')->get();
        $title = "Mengelola data Tata Usaha";
        return (view('admin.mengelola_tatausaha', ['data'=> $data, 'title' => $title]));
    }
    public function formTambahDataTataUsaha(){
        $title = "Tambah Tata Usaha";
        return (view('admin.tambah_data_tatausaha', ['title' => $title]));
    }
    public function tambahTataUsaha(Request $request){
        $data = new User();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->level = 'Tata Usaha';
        $data->password = bcrypt($request->password);

        if($request->hasFile('image')){
            $request->file('image')->move('fototatausaha/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }else{
            $data->save();
        }
        return redirect('admin/mengelola_tatausaha')->withSuccess('Data berhasil ditambahkan');
    }
    function infoTataUsaha(Request $request){
        $data = DB::table('users')->where('id',$request->id )->first();
        $title = "Info Tata Usaha $data->nama";
        return view('admin.info_tatausaha',['data'=>$data, 'title'=>$title]);
    }
    function formEditTataUsaha(Request $request){
        $data = DB::table('users')->where('id', $request->id)->first();
        $title = "Edit Data Tata Usaha $data->nama";
        return view('admin.edit_data_tatausaha',['data'=>$data, 'title'=>$title]);
    }
    function editTataUsaha(Request $request, $id){
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        // $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('admin/mengelola_tatausaha')->withSuccess('Data berhasil diubah');
    }
    function hapusTataUsaha(Request $request){
        $data2 = User::find($request->id);
        $data2->delete();
        return redirect()->back();
    }

    // CRUD GURU
    public function mengelolaGuru (){
        $data = DB::table('users')->where('level', 'Guru')->get();
        $title = "Mengelola data Guru";
        return (view('admin.mengelola_guru', ['data'=> $data, 'title' => $title]));
    }
    public function formTambahDataGuru(){
        $title = "Tambah Guru";
        return (view('admin.tambah_data_guru', ['title' => $title]));
    }
    public function tambahGuru(Request $request){
        $data = new User();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->level = 'Guru';
        $data->password = bcrypt($request->password);

        if($request->hasFile('image')){
            $request->file('image')->move('fotoguru/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }else{
            $data->save();
        }
        return redirect('admin/mengelola_guru')->withSuccess('Data berhasil ditambahkan');
    }
    function infoGuru(Request $request){
        $data = DB::table('users')->where('id',$request->id )->first();
        $title = "Info Guru $data->nama";
        return view('admin.info_guru',['data'=>$data, 'title'=>$title]);
    }
    function formEditGuru(Request $request){
        $data = DB::table('users')->where('id', $request->id)->first();
        $title = "Edit Data Guru $data->nama";
        return view('admin.edit_data_guru',['data'=>$data, 'title'=>$title]);
    }
    function editGuru(Request $request, $id){
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        // $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('admin/mengelola_guru')->withSuccess('Data berhasil diubah');
    }
    function hapusGuru(Request $request){
        $data2 = User::find($request->id);
        $data2->delete();
        return redirect()->back();
    }
}
