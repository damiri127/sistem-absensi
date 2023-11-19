@extends('layout.admin')
@section('content')
<div class="page-inner">
    <a href="/master-user/kepala-sekolah/create" class="btn btn-primary"><i class="fas fa-plus"></i>     Tambah</a>
    <div class="card mt-3">
        <div class="card-header">
            <h4 class="card-title">Data Kepala Sekolah</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
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
                                    @if ($item->is_Active == 1)
                                        <button class="btn btn-sm btn-success disabled" disabled>Active</button>
                                    @else
                                    <button class="btn btn-sm btn-danger disabled" disabled>InActive</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="/master-user/kepala-sekolah/{{$item->id}}" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i> <span>Info</span></a>
                                    <a href="/master-user/kepala-sekolah/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> <span>Edit</span></a>
                                    {{-- <a href="/kepala-sekolah/{{$item->id}}" class="btn btn-sm btn-danger" id="hapus_data"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a> --}}
                                    <a href="#" class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();"><i class="fas fa-trash-alt"></i>
                                        Delete
                                    </a>
                                    <form id="delete-form-{{ $item->id }}" action="/master-user/kepala-sekolah/{{$item->id}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
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