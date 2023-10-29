@extends('kepala-sekolah.layout.kepsek')
@section('content')
    <div class="page-inner">
        <div class="card mt-2">
            <div class="card-header">
                <h2>Data Absensi</h2>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-danger mb-3"> <i class="flaticon-back"></i> Kembali</a>
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Waktu Absensi</th>
                                <th>ID - Nama Guru</th>
                                <th>Mata Pelajaran</th>
                                <th>Total Jam Pertemuan</th>
                                <th>Keterangan</th>
                                <th>Pendapatan</th>
                            </tr>
                        </thead>
                        <tfoot> 
                            <tr>
                                <th>Id</th>
                                <th>Waktu Absensi</th>
                                <th>Mata Pelajaran</th>
                                <th>Total Jam Pertemuan</th>
                                <th>Keterangan</th>
                                <th>Pendapatan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id_absensi }}</td>
                                    <td>{{ $item->waktu_absensi}}</td>
                                    <td>{{$item->id}} - {{$item->nama}}</td>
                                    <td>{{$item->nama_mapel}} - {{$item->jam_selesai}}</td>
                                    <td>{{$item->total_jp}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td>{{$item->pendapatan}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
        @include('sweetalert::alert')
    </div>
@endsection