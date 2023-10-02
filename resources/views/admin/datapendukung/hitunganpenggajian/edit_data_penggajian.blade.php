@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header">
                <h2>Edit Data Penggajian</h2>
            </div>
            <div class="card-body">
                <form action="/master-user/edit_penggajian/{{$data->id_penggajian}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputNama">Keterangan</label>
                        <input id="inputNama" type="text" name="keterangan" class="form-control" value="{{$data->keterangan}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Total Gaji</label>
                        <input id="inputNama" type="text" name="total_gaji" class="form-control" value="{{$data->total_gaji}}">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Perbarui</button>
                        <a href="/master-user/mengelola_penggajian" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection