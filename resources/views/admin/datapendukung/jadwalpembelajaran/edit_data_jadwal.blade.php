@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header">
                <h2>Edit Jadwal Mengajar</h2>
            </div>
            <div class="card-body">
                <form action="/master-user/edit_jadwal/{{$data->id_jadwal}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="hari" required>
                            <option value="{{$data->hari}}">{{$data->hari}}</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Hari</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="jam_mulai" required>
                            <option value="{{$data->jam_mulai}}">{{$data->jam_mulai}}</option>
                            <option value="07:20:00">07:20:00</option>
                            <option value="07:40:00">07:40:00</option>
                            <option value="08:00:00">08:00:00</option>
                            <option value="08:20:00">08:20:00</option>
                            <option value="08:40:00">08:40:00</option>
                            <option value="09:00:00">09:00:00</option>
                            <option value="09:20:00">09:20:00</option>
                            <option value="09:40:00">09:40:00</option>
                            <option value="10:20:00">10:20:00</option>
                            <option value="10:30:00">10:30:00</option>
                            <option value="10:50:00">10:50:00</option>
                            <option value="11:10:00">11:10:00</option>
                            <option value="11:30:00">11:30:00</option>
                            <option value="11:50:00">11:50:00</option>
                            <option value="12:10:00">12:10:00</option>
                            <option value="12:40:00">12:40:00</option>
                            <option value="13:20:00">13:20:00</option>
                            <option value="14:00:00">14:00:00</option>
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Jam Mulai</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="jam_selesai" required>
                            <option value="{{$data->jam_selesai}}">{{$data->jam_selesai}}</option>
                            <option value="07:40:00">07:40:00</option>
                            <option value="08:00:00">08:00:00</option>
                            <option value="08:20:00">08:20:00</option>
                            <option value="08:40:00">08:40:00</option>
                            <option value="09:00:00">09:00:00</option>
                            <option value="09:20:00">09:20:00</option>
                            <option value="09:40:00">09:40:00</option>
                            <option value="10:20:00">10:20:00</option>
                            <option value="10:30:00">10:30:00</option>
                            <option value="10:50:00">10:50:00</option>
                            <option value="11:10:00">11:10:00</option>
                            <option value="11:30:00">11:30:00</option>
                            <option value="11:50:00">11:50:00</option>
                            <option value="12:10:00">12:10:00</option>
                            <option value="12:40:00">12:40:00</option>
                            <option value="13:20:00">13:20:00</option>
                            <option value="14:00:00">14:00:00</option>
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Jam Selesai</label>
                    </div>

                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="id_mapel" required>
                            
                            @foreach ($data_mapel as $item )
                                @if ($item->id_mapel == $data->id_mapel)
                                    <option value="{{$data->id_mapel}}">{{$item->nama_mapel}}</option>
                                @endif
                            @endforeach
                            @foreach ($data_mapel as $item )
                                <option value="{{$item->id_mapel}}">{{$item->nama_mapel}}</option>
                            @endforeach
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Mata Pelajaran</label>
                    </div>

                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="id_kelas" required>
                            @foreach ($data_kelas as $item)
                                @if($item->id_kelas == $data->id_kelas)
                                    <option value="{{$data->id_kelas}}">{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</option>
                                @endif

                            @endforeach
                            @foreach ($data_kelas as $item )
                                <option value="{{$item->id_kelas}}">{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</option>
                            @endforeach
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Kelas</label>
                    </div>

                    <div class="form-group form-floating-label">
                        <select class="form-control input-border-bottom" id="selectFloatingLabel" name="id_guru" required>
                            @foreach ($data_guru as $item)
                                @if ($item->id == $data->id_guru)
                                    <option value="{{$data->id_guru}}">{{$item->nama}}</option>
                                @endif
                            @endforeach
                            @foreach ($data_guru as $item )
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                        <label for="selectFloatingLabel" class="placeholder">Pilih Guru</label>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Perbarui</button>
                        <a href="/master-user/mengelola_jadwalpelajaran" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection