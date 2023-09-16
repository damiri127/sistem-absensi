@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Data Program Studi</h2>
            </div>
            <div class="card-body">
                <form action="/admin/edit_programstudi/{{$data->id_prodi}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input id="inputNama" type="text" name="nama_prodi" class="form-control" value="{{$data->nama_prodi}}" placeholder="Masukan Nama Program Studi">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Perbarui</button>
                        <a href="/admin/mengelola_programstudi" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection