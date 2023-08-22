@extends('layout.admin')
@section('content')
    <div class="page-inner">
            <a href="/admin/mengelola_guru" class="btn btn-danger mb-3"> <i class="flaticon-back"></i> Kembali</a>
            {{-- <h4 class="page-title" class="mb-3">Tambah Data Admin</h4> --}}
        <div class="card">
            <div class="card-header">
                <h2>Tambah Data Guru</h2>
            </div>
            <div class="card-body">
                <form action="/admin/tambah_guru" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input id="inputNama" type="text" name="nama" class="form-control" placeholder="Masukan Nama Guru">
                    </div>
                    <div class="form-group">
                        <label for="inputTanggalLahir">Tanggal Lahir</label>
                        <input id="inputTanggalLahir" type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir Guru">
                    </div>
                    <div class="form-group">
                        <label for="inputTempatLahir">Tempat Lahir</label>
                        <input id="inputTempatLahir" type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir Guru">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input id="inputEmail" type="email" name="email" class="form-control" placeholder="Masukan Alamat Email Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input id="inputPassword" type="password" name="password" class="form-control" placeholder="Masukan Password" required>
                    </div>
                    <div class="form-group">
                        <label for="inputImage">Gambar Guru</label>
                        <input type="file" class="form-control-file" id="inputImage" name="image" placeholder="Masukan Gambar Guru">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Tambahkan</button>
                        <a href="/admin/mengelola_guru" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection