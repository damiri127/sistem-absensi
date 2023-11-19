@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <a href="/master-user/kepala-sekolah" class="btn btn-danger mb-3"> <i class="flaticon-back"></i> Kembali</a>
        {{-- <h4 class="page-title" class="mb-3">Tambah Data Admin</h4> --}}
        <div class="card">
            <div class="card-header">
                <h2>Edit Data Kepala Sekolah</h2>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('/master-user/kepala-sekolah/'.$data->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input id="inputNama" type="text" name="nama" class="form-control" placeholder="Masukan Nama Kepala Sekolah" value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="inputTanggalLahir">Tanggal Lahir</label>
                        <input id="inputTanggalLahir" type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir Kepala Sekolah" value="{{$data->tanggal_lahir}}">
                    </div>
                    <div class="form-group">
                        <label for="inputTempatLahir">Tempat Lahir</label>
                        <input id="inputTempatLahir" type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir Kepala Sekolah" value="{{$data->tempat_lahir}}">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input id="inputEmail" type="email" name="email" class="form-control" placeholder="Masukan Alamat Email Kepala Sekolah" value="{{$data->email}}" required>
                    </div>
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="is_Active" required>
                            @if ($data->is_Active == 1)
                                <option value="1">Active</option>
                            @else
                                <option value="0">InActive</option>
                            @endif
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Status</label>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input id="inputPassword" type="password" name="password" class="form-control" placeholder="Masukan Password" value="{{$data->password}}" required>
                    </div>
                    <div class="card-footer">
                        @method('PUT')
                        <button type="submit" class="btn btn-success">Perbarui</button>
                        <a href="/master-user/kepala-sekolah" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection