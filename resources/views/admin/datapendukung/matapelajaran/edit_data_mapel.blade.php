@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header">
                <h2>Edit Data Mata Pelajaran</h2>
            </div>
            <div class="card-body">
                <form action="/admin/edit_matapelajaran/{{$data->id_mapel}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input id="inputNama" type="text" name="nama_mapel" class="form-control" placeholder="Masukan Nama Mata Pelajaran" required value="{{$data->nama_mapel}}">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Perbarui</button>
                        <a href="/admin/mengelola_matapelajaran" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection