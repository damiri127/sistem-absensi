@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header">
                <h2>Edit Data Kelas Siswa</h2>
            </div>
            <div class="card-body">
                <form action="/admin/edit_kelas/{{$data->id_kelas}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="tingkat_kelas" required>
                            <option value="{{$data->tingkat_kelas}}">{{$data->tingkat_kelas}}</option>
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Tingkat Kelas</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="id_prodi" disabled>
                            @foreach ($data_prodi as $item ){
                                @if($item->id_prodi == $data->id_prodi)
                                    <option value="{{$item->id_prodi}}">{{$item->nama_prodi}}</option>
                                @endif
                            }
                            @endforeach
                            @foreach ($data_prodi as $item ){
                                <option value="{{$item->id_prodi}}">{{$item->nama_prodi }}</option>
                            }
                            @endforeach
                        </select>
                        <label for="selectFloatingLabel" class="placeholder"></label>
                    </div>
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="grup">
                            <option value="{{$data->grup}}">{{$data->grup}}</option>
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
                        <button type="submit" class="btn btn-success">Perbarui</button>
                        <a href="/admin/mengelola_kelas" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection