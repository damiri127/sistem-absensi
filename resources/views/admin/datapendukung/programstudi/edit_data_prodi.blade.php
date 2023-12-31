@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header">
                <h2>Edit Data Program Studi</h2>
            </div>
            <div class="card-body">
                <form action="/master-user/edit_programstudi/{{$data->id_prodi}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input id="inputNama" type="text" name="nama_prodi" class="form-control" value="{{$data->nama_prodi}}" placeholder="Masukan Nama Program Studi">
                    </div>
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="is_active" required>
                            @if ($data->is_active)
                            <option value="1">Active</option>
                            @else
                            <option value="0">InActive</option>
                            @endif
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Status</label>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Perbarui</button>
                        <a href="/master-user/mengelola_programstudi" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection