@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <a href="#" class="btn btn-primary mb-3">Export</a>
        <div class="card mt-2">
            <div class="card-header">
                <h2>Data Absensi Tahun {{$tahun_ajaran->tahun_mulai}}/{{$tahun_ajaran->tahun_selesai}} - Semester 
                    @if ($tahun_ajaran->isSemesterGanjil)
                        Ganjil
                    @else
                        Genap
                    @endif
                </h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables1" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Waktu</th>
                                <th>Guru</th>
                                <th>Mata Pelajaran</th>
                                <th>Kelas</th>
                                <th>Waktu Mengajar</th>
                                <th>Pendapatan</th>
                            </tr>
                        </thead>
                        <tfoot> 
                            <tr>
                                <th>ID</th>
                                <th>Waktu</th>
                                <th>Guru</th>
                                <th>Mata Pelajaran</th>
                                <th>Kelas</th>
                                <th>Waktu Mengajar</th>
                                <th>Pendapatan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($dataAbsen as $item)
                                <tr>
                                    <td>{{$item->id_absensi}}</td>
                                    <td>{{$item->waktu_absensi}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->nama_mapel}}</td>
                                    <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                    <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                    <td>
                                        {{$item->pendapatan}}
                                    </td>
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