@extends('guru.layout.guru')
@section('content')
    <div class="page-inner">
        {{-- DATA ABSENSI BY MONTH --}}
        <h2>Data Absensi Tahun Ajaran {{$tahun_ajaran->tahun_mulai}}/{{$tahun_ajaran->tahun_selesai}} - Semester
            @if ($tahun_ajaran->isSemesterGanjil)
                Ganjil
            @else
                Genap
            @endif
        </h2>
        <div class="row">
            {{-- January - June --}}
            <div class="col">
                <div class="accordion accordion-secondary">
                    <div class="card">
                        <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="span-icon">
                                <img src="{{asset('icon_month_asset/june_ic.png')}}">
                            </div>
                            <h3>Absensi Bulan Januari</h3>
                            <div class="span-mode"></div>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenJan as $item)
                                                <tr>
                                                    <td>{{$item->id_absensi}}</td>
                                                    <td>{{$item->waktu_absensi}}</td>
                                                    <td>{{$item->nama}}</td>
                                                    <td>{{$item->nama_mapel}}</td>
                                                    <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                    <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                    <td>
                                                        {{$item->pendapatan}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
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
                            <h3>Absensi Bulan Febuari</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables2" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenFeb as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
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
                            <h3>Absensi Bulan Maret</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables3" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenMar as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
                            <div class="span-icon">
                                <img src="{{asset('icon_month_asset/april_ic.png')}}">
                            </div>
                            <h3>Absensi Bulan April</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables4" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenApr as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
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
                            <h3>Absensi Bulan Mei</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables5" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenMei as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header collapsed" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            <div class="span-icon">
                                <img src="{{asset('icon_month_asset/june_ic.png')}}">
                            </div>
                            <h3>Absensi Bulan Juni</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables6" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenJun as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
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
            {{-- July - December --}}
            <div class="col">
                <div class="accordion accordion-secondary">

                    <div class="card">
                        <div class="card-header collapsed" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            <div class="span-icon">
                                <img src="{{asset('icon_month_asset/december_ic.png')}}">
                            </div>
                            <h3>Absensi Bulan Juli</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables7" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenJul as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header collapsed" id="headingEight" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            <div class="span-icon">
                                <img src="{{asset('icon_month_asset/july_ic.png')}}">
                            </div>
                            <h3>Absensi Bulan Agustus</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables8" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenAugust as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header collapsed" id="headingNine" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                            <div class="span-icon">
                                <img src="{{asset('icon_month_asset/july_ic.png')}}">
                            </div>
                            <h3>Absensi Bulan September</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables9" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenSept as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header collapsed" id="headingTen" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                            <div class="span-icon">
                                <img src="{{asset('icon_month_asset/july_ic.png')}}">
                            </div>
                            <h3>Absensi Bulan Oktober</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables10" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenOct as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header collapsed" id="headingEleven" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                            <div class="span-icon">
                                <img src="{{asset('icon_month_asset/july_ic.png')}}">
                            </div>
                            <h3>Absensi Bulan November</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables11" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenNov as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header collapsed" id="headingTwelve" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                            <div class="span-icon">
                                <img src="{{asset('icon_month_asset/july_ic.png')}}">
                            </div>
                            <h3>Absensi Bulan Desember</h3>
                            <div class="span-mode"></div>
                        </div>
                
                        <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables12" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </thead>
                                        <tfoot> 
                                            <tr>
                                                <th>ID</th>
                                                <th>Waktu</th>
                                                <th>Guru</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Waktu Mengajar</th>
                                                <th>Pendapatan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($dataAbsenDec as $item)
                                            <tr>
                                                <td>{{$item->id_absensi}}</td>
                                                <td>{{$item->waktu_absensi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->nama_mapel}}</td>
                                                <td>{{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</td>
                                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                                                <td>
                                                    {{$item->pendapatan}}
                                                </td>
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
        </div>
    </div>
@endsection