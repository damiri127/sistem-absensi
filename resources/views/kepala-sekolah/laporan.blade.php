@extends('kepala-sekolah.layout.kepsek')
@section('content')
<div class="page-inner">
    <H2>Absensi Semester Ganjil</H2>
    <div class="accordion accordion-secondary">
        <div class="card">
            <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="span-icon">
                    <img src="{{asset('icon_month_asset/june_ic.png')}}">
                </div>
                <h3>Absensi Bulan Juni</h3>
                <div class="span-mode"></div>
            </div>
    
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </thead>
                            <tfoot> 
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </tfoot>
                            {{-- <tbody>
                                @foreach ($dataAbsenJune as $item)
                                    <tr>
                                        <td>{{$item->waktu_absensi}}</td>
                                        <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                        <td>{{$item->nama_mapel}}</td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <div class="span-icon">
                    <img src="{{asset('icon_month_asset/july_ic.png')}}">
                </div>
                <h3>Absensi Bulan Juli</h3>
                <div class="span-mode"></div>
            </div>
    
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </thead>
                            <tfoot> 
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </tfoot>
                            {{-- <tbody>
                                @foreach ($dataAbsenJune as $item)
                                    <tr>
                                        <td>{{$item->waktu_absensi}}</td>
                                        <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                        <td>{{$item->nama_mapel}}</td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <div class="span-icon">
                    <img src="{{asset('icon_month_asset/august_ic.png')}}">
                </div>
                <h3>Absensi Bulan Agustus</h3>
                <div class="span-mode"></div>
            </div>
    
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables3" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </thead>
                            <tfoot> 
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </tfoot>
                            {{-- <tbody>
                                @foreach ($dataAbsenAugust as $item)
                                    <tr>
                                        <td>{{$item->waktu_absensi}}</td>
                                        <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                        <td>{{$item->nama_mapel}}</td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                <div class="span-icon">
                    <img src="{{asset('icon_month_asset/september_ic.png')}}">
                </div>
                <h3>Absensi Bulan September</h3>
                <div class="span-mode"></div>
            </div>
    
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables4" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </thead>
                            <tfoot> 
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </tfoot>
                            {{-- <tbody>
                                @foreach ($dataAbsenSeptember as $item)
                                    <tr>
                                        <td>{{$item->waktu_absensi}}</td>
                                        <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                        <td>{{$item->nama_mapel}}</td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                <div class="span-icon">
                    <img src="{{asset('icon_month_asset/october_ic.png')}}">
                </div>
                <h3>Absensi Bulan Oktober</h3>
                <div class="span-mode"></div>
            </div>
    
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables5" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </thead>
                            <tfoot> 
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </tfoot>
                            {{-- <tbody>
                                @foreach ($dataAbsenOctober as $item)
                                    <tr>
                                        <td>{{$item->waktu_absensi}}</td>
                                        <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                        <td>{{$item->nama_mapel}}</td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header collapsed" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                <div class="span-icon">
                    <img src="{{asset('icon_month_asset/november_ic.png')}}">
                </div>
                <h3>Absensi Bulan November</h3>
                <div class="span-mode"></div>
            </div>
    
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables6" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </thead>
                            <tfoot> 
                                <tr>
                                    <th>Waktu Absensi</th>
                                    <th>ID - Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Total Jam Pertemuan</th>
                                    <th>Keterangan</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </tfoot>
                            {{-- <tbody>
                                @foreach ($dataAbsenNovember as $item)
                                    <tr>
                                        <td>{{$item->waktu_absensi}}</td>
                                        <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                        <td>{{$item->nama_mapel}}</td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header collapsed" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                <div class="span-icon">
                    <img src="{{asset('icon_month_asset/december_ic.png')}}">
                </div>
                <h3>Absensi Bulan Desember</h3>
                <div class="span-mode"></div>
            </div>
    
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables7" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Waktu Absensi</th>
                                <th>ID - Nama Guru</th>
                                <th>Mata Pelajaran</th>
                                <th>Total Jam Pertemuan</th>
                                <th>Keterangan</th>
                                <th>Pendapatan</th>
                                </tr>
                            </thead>
                            <tfoot> 
                                <tr>
                                    <th>Waktu Absensi</th>
                                <th>ID - Nama Guru</th>
                                <th>Mata Pelajaran</th>
                                <th>Total Jam Pertemuan</th>
                                <th>Keterangan</th>
                                <th>Pendapatan</th>
                                </tr>
                            </tfoot>
                            {{-- <tbody>
                                @foreach ($dataAbsenDecember as $item)
                                    <tr>
                                        <td>{{$item->waktu_absensi}}</td>
                                        <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                        <td>{{$item->nama_mapel}}</td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection