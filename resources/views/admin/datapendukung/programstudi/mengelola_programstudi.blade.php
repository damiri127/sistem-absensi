@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <a href="/master-user/tambah_data_programstudi" class="btn btn-primary"><i class="fas fa-plus"></i>     Tambah</a>
        <div class="card mt-2">
            <div class="card-header">
                <h2>Data Program Studi</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id_prodi }}</td>
                                    <td>{{ $item->nama_prodi }}</td>
                                    <td>
                                        <a href="/master-user/info_programstudi/{{$item->id_prodi}}" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i> <span>Info</span></a>
                                        <a href="/master-user/edit_data_programstudi/{{$item->id_prodi}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> <span>Edit</span></a>
                                        <a href="/master-user/hapus_programstudi/{{$item->id_prodi}}" class="btn btn-sm btn-danger" id="hapus_data"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a>
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