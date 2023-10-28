@extends('guru.layout.guru')
@section('content')
    <div class="page-inner">
        <a href="/dashboard-guru" class="btn btn-danger mb-3"> <i class="flaticon-back"></i> Kembali</a>
        {{-- <h4 class="page-title" class="mb-3">Tambah Data Admin</h4> --}}
        <div class="card">
            <div class="card-body">
                @if (is_null($data))
                    <p style="color: red">AKSES DITUTUP</p>
                @else
                <h3>{{$data->nama_mapel}} - {{$data->tingkat_kelas}} {{$data->nama_prodi}} {{$data->grup}}</h3>
                <h5>{{$data->jam_mulai}} - {{$data->jam_selesai}}</h5>
                
                <form method="POST" action="/guru/postAbsen/{{$data->id_jadwal}}">
                    @csrf
                    <div class="form-check">
                        <label>Keterangan Absensi</label><br/>
                        <label class="form-radio-label">
                            <input class="form-radio-input" type="radio" name="keterangan" value="1"  checked="">
                            <span class="form-radio-sign">Hadir</span>
                        </label>
                        <label class="form-radio-label ml-3">
                            <input class="form-radio-input" type="radio" name="keterangan" value="3">
                            <span class="form-radio-sign">Izin</span>
                        </label>
                        <label class="form-radio-label ml-3">
                            <input class="form-radio-input" type="radio" name="keterangan" value="2">
                            <span class="form-radio-sign">Tidak Hadir</span>
                        </label>
                    </div>

                    @if (is_null($dataAbsen))
                        @if (($data->hari==$dayName)&&($data->jam_selesai >= $time) )
                            <button type="submit" class="btn btn-success">Absen</button>
                        @else
                            <button type="submit" class="btn btn-danger disabled" disabled>Absen Ditutup</button>
                            <p style="color:red">* Absen hanya bisa dibuka saat sudah memasuki waktu jadwal</p>
                        @endif
                    @else
                        <button type="submit" class="btn btn-success disabled" disabled>Sudah Absen</button>
                        <p style="color:red">* Kamu sudah absen hari ini</p>
                    @endif
                </form>
                @endif
            </div>
        </div>
    </div>
@endsection
