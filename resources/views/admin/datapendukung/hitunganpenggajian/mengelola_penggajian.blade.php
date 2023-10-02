@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card mt-2">
            <div class="card-header">
                <h2>Data Penggajian</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Keterangan Absensi</th>
                                <th>Total Gaji / Jam</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Keterangan Absensi</th>
                                <th>Total Gaji / Jam</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id_penggajian }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{$item->total_gaji}}</td>
                                    <td>
                                        <a href="/master-user/edit_data_penggajian/{{$item->id_penggajian}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> <span>Edit</span></a>
                                        {{-- <a href="/master-user/hapus_penggajian/{{$item->id_penggajian}}" class="btn btn-sm btn-danger" id="hapus_data"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a> --}}
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