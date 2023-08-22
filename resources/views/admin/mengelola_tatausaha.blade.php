@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <a href="/admin/tambah_data_tatausaha" class="btn btn-primary"><i class="fas fa-plus"></i>     Tambah</a>
        <div class="card mt-3">
            <div class="card-header">
                <h4 class="card-title">Data Tata Usaha</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <a href="/admin/info_tatausaha/{{$item->id}}" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i> <span>Info</span></a>
                                        <a href="/admin/edit_data_tatausaha/{{$item->id}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> <span>Edit</span></a>
                                        <a href="/admin/hapus_tatausaha/{{$item->id}}" class="btn btn-sm btn-danger" id="hapus_data"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a>
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