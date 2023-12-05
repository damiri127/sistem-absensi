@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <a href="/master-user/tambah_tahun_ajaran" class="btn btn-primary"><i class="fas fa-plus"></i>     Tambah</a>
        <div class="card mt-2">
            <div class="card-header">
                <h2>Data Tahun Pelajaran</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tahun Ajaran</th>
                                <th>Semester</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot> 
                            <tr>
                                <th>Id</th>
                                <th>Tahun Ajaran</th>
                                <th>Semester</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $item )
                            <tr>
                                <td>{{$item->id_tahun_ajaran}}</td>
                                <td>{{$item->tahun_mulai}} / {{$item->tahun_selesai}}</td>
                                <td>
                                    @if ($item->isSemesterGanjil)
                                        Ganjil
                                    @else
                                        Genap
                                    @endif
                                </td>
                                <td>
                                    <a href="/master-user/edit_tahun_ajaran/{{$item->id_tahun_ajaran}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i><span>Edit</span></a>
                                    <a href="/master-user/delete_tahun_ajaran/{{$item->id_tahun_ajaran}}" class="btn btn-sm btn-danger" id="hapus_data"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a>
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