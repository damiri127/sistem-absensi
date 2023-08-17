@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i>     Tambah</a>
        <div class="card mt-3">
            <div class="card-header">
                <h4 class="card-title">Basic</h4>
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
                            <tr>
                                <td>1</td>
                                <td>Rifqi Ibrahim</td>
                                <td>rifqiibrahim@smksteladankertasmaya.sch.id</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i> <span>Info</span></a>
                                    <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> <span>Edit</span></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Saka Garandipa</td>
                                <td>sakagarandipa@smksteladankertasmaya.sch.id</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i> <span>Info</span></a>
                                    <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> <span>Edit</span></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Arief Damiri</td>
                                <td>ariefdamiri@smksteladankertasmaya.sch.id</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i> <span>Info</span></a>
                                    <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> <span>Edit</span></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> <span>Hapus</span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection