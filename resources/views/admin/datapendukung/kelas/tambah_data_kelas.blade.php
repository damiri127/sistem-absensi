@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Data Kelas Siswa</h2>
            </div>
            <div class="card-body">
                <form action="/admin/post_kelas" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="tingkat_kelas" required>
                            <option value="">&nbsp;</option>
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Tingkat Kelas</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="id_prodi" required>
                            <option value="">&nbsp;</option>
                            @foreach ($data_prodi as $item ){
                                <option value="{{$item->id_prodi}}">{{$item->nama_prodi }}</option>
                            }
                            @endforeach
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Program Studi</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="grup" required>
                            <option value="">&nbsp;</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Grup Kelas</label>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Tambahkan</button>
                        <a href="/admin/mengelola_kelas" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection