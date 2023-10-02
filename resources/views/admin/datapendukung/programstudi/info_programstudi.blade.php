@extends('layout.admin')
@section('content')
    <div class="page-inner">
       <div class="card mt-2">
            <div class="card-header">
                <h2>Data Kelas Program Studi {{$nama_prodi->nama_prodi}}</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nama Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id_kelas }}</td>
                                    <td>{{ $item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                    <td>
                                        <a href="/master-user/edit_data_kelas/{{$item->id_kelas}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> <span>Edit</span></a>
                                        <a href="/master-user/hapus_kelas/{{$item->id_kelas}}" class="btn btn-sm btn-danger" id="hapus_data"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a>
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