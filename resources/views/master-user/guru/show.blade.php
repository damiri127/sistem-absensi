@extends('layout.admin')
@section('content')
    <div class="page-inner">
        <div class="card ">
            <div class="card-header">
                <h2>Informasi Data Guru</h2>
            </div>
            <div class="card-body">
                <div class="page-inner">
                        <div class="row">
                            <div class="col">
                                <center>
                                    <div>
                                        <img src="{{asset('fotoguru/'.$data->image)}}" alt="" class="img-thumbnail w-25">
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover" >
                                        <tr>
                                            <th width="200px">Nama</th>
                                            <td width="10px">:</td>
                                            <td>{{$data->nama}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat dan Tanggal lahir</th>
                                            <td width="10px">:</td>
                                            <td>{{$data->tempat_lahir}},{{\Carbon\Carbon::parse($data->tanggal_lahir)->format(' d M Y')}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td width="10px">:</td>
                                            <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Waktu Terdaftar</th>
                                            <td width="10px">:</td>
                                            <td>{{\Carbon\Carbon::parse($data->created_at)->format(' D, d M Y')}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/master-user/guru/{{$data->id}}/edit" class="btn btn-warning">Edit Data</a>
                <a href="/master-user/guru" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
@endsection