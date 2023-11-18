@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Tahun Ajaran</h2>
            </div>
            <div class="card-body">
                <form action="/master-user/post_tahun_ajaran" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputNama">Tahun Mulai</label>
                        <input id="inputNama" type="text" name="tahun_mulai" class="form-control" required placeholder="Masukan tahun ajaran">
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Tahun Selesai</label>
                        <input id="inputNama" type="text" name="tahun_selesai" class="form-control" required placeholder="Masukan tahun ajaran">
                    </div>
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="isSemesterGanjil" required>
                            <option value=""></option>
                            <option value="1">Semester Ganjil</option>
                            <option value="0">Semester Genap</option>
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Semester</label>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Tambahkan</button>
                        <a href="/master-user/mengelola_tahun_ajaran" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection