@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <a href="/admin/tambah_data_jadwalpelajaran" class="btn btn-primary"><i class="fas fa-plus"></i>     Tambah</a>
        <div class="card mt-2">
            <div class="card-header">
                <h2>Data Jadwal Pembelajaran</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Hari</th>
                                <th>Waktu</th>
                                <th>Mata Pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot> 
                            <tr>
                                <th>Id</th>
                                <th>Hari</th>
                                <th>Waktu</th>
                                <th>Mata Pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id_jadwal }}</td>
                                    <td>{{ $item->hari}}</td>
                                    <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                    <td>{{$item->nama_mapel}}</td>
                                    <td>
                                        <a href="/admin/edit_data_matapelajaran/{{$item->id_mapel}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> <span>Edit</span></a>
                                        <a href="/admin/hapus_matapelajaran/{{$item->id_mapel}}" class="btn btn-sm btn-danger" id="hapus_data"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a>
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