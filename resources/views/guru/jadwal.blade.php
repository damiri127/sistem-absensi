@extends('guru.layout.guru')
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Jadwal Mengajar Tahun Ajaran {{$tahun_ajaran->tahun_mulai}} / {{$tahun_ajaran->tahun_selesai}} - Semester 
                    @if ($tahun_ajaran->isSemesterGanjil)
                        Ganjil
                    @else
                        Genap
                    @endif
                </h3>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-senin-tab" data-toggle="pill" href="#pills-senin" role="tab" aria-controls="pills-senin" aria-selected="true">Senin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-selasa-tab" data-toggle="pill" href="#pills-selasa" role="tab" aria-controls="pills-selasa" aria-selected="false">Selasa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-rabu-tab" data-toggle="pill" href="#pills-rabu" role="tab" aria-controls="pills-rabu" aria-selected="false">Rabu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-kamis-tab" data-toggle="pill" href="#pills-kamis" role="tab" aria-controls="pills-kamis" aria-selected="false">Kamis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-jumat-tab" data-toggle="pill" href="#pills-jumat" role="tab" aria-controls="pills-jumat" aria-selected="false">Jumat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-sabtu-tab" data-toggle="pill" href="#pills-sabtu" role="tab" aria-controls="pills-sabtu" aria-selected="false">Sabtu</a>
                    </li>
                </ul>
                <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-senin" role="tabpanel" aria-labelledby="pills-senin-tab">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </thead>
                                <tfoot> 
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($jadwalSenin as $item)
                                        <tr>
                                            <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                            <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                            <td>{{$item->nama_mapel}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-selasa" role="tabpanel" aria-labelledby="pills-selasa-tab">
                        <div class="table-responsive">
                            <table id="basic-datatables2" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </thead>
                                <tfoot> 
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($jadwalSelasa as $item)
                                        <tr>
                                            <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                            <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                            <td>{{$item->nama_mapel}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-rabu" role="tabpanel" aria-labelledby="pills-rabu-tab">
                        <div class="table-responsive">
                            <table id="basic-datatables3" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </thead>
                                <tfoot> 
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($jadwalRabu as $item)
                                        <tr>
                                            <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                            <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                            <td>{{$item->nama_mapel}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-kamis" role="tabpanel" aria-labelledby="pills-kamis-tab">
                        <div class="table-responsive">
                            <table id="basic-datatables4" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </thead>
                                <tfoot> 
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($jadwalKamis as $item)
                                        <tr>
                                            <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                            <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                            <td>{{$item->nama_mapel}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-jumat" role="tabpanel" aria-labelledby="pills-jumat-tab">
                        <div class="table-responsive">
                            <table id="basic-datatables5" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </thead>
                                <tfoot> 
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($jadwalJumat as $item)
                                        <tr>
                                            <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                            <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                            <td>{{$item->nama_mapel}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-sabtu" role="tabpanel" aria-labelledby="pills-sabtu-tab">
                        <div class="table-responsive">
                            <table id="basic-datatables6" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </thead>
                                <tfoot> 
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($jadwalSabtu as $item)
                                        <tr>
                                            <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                            <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                            <td>{{$item->nama_mapel}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection