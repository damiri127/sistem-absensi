<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KepalaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Kepala Sekolah';
        $data = DB::table('users')->where('level', 'Kepala Sekolah')->get();
        return view('kepala-sekolah.mengelola_kepala_sekolah', ['data' => $data, 'title' => $title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah data kepala Sekolah';
        return view('kepala-sekolah.create', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->level = 'Kepala Sekolah';
        $data->password = bcrypt($request->password);

        if($request->hasFile('image')){
            $request->file('image')->move('fotoadmin/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }else{
            $data->save();
        }
        return redirect('kepala-sekolah')->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {
        $data = User::find($id);
        $title = "Info Kepala Sekolah $data->nama";
        return view('kepala-sekolah.show', compact('title', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $title = "Ubah data kepala Sekolah";
        $data = User::find($id);
        return view('kepala-sekolah.edit', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->image = $request->image;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->password = bcrypt($request->password);
        if($request->hasFile('image')){
            $request->file('image')->move('fotoadmin/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->update();
        }else{
            $data->update();
        }

        return redirect('kepala-sekolah')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->withSuccess('Data berhasil dihapus!');
    }
}
