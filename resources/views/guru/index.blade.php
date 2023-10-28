@extends('guru.layout.guru')
@section('content')

{{-- Panel Header --}}
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Selamat Datang, {{auth()->user()->nama}}!</h2>
                <h5 class="text-white op-7 mb-2">Sistem  Absensi Guru SMKS Teladan Kertasmaya</h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="/guru/profile" class="btn btn-white btn-border btn-round mr-2">Profil Saya</a>
                <a href="#" class="btn btn-secondary btn-round">Informasi Absensi</a>
            </div>
        </div>
    </div>
</div>
{{-- End Panel Header --}}

{{-- Informasi --}}
<div class="page-inner mt-2">
    <div>
        <div class="card full-height">
            <div class="card-body">
                <div class="card-title">Aktivitas {{auth()->user()->level}}</div>
                <p>{{$dayName}}, {{$dateTime}}</p>
                <div class="mt-3">
                    @if ($count == 0)
                        @foreach ($data as $item)
                            @if ($time <= $item->jam_selesai)
                                <div class="card">
                                    <div class="card-body">
                                        <h3>{{$item->nama_mapel}} - {{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</h3>
                                        <h5>{{$item->jam_mulai}} - {{$item->jam_selesai}}</h5>
                                        @if ($time >= $item->jam_mulai)
                                            <a href="/guru/absen/{{$item->id_jadwal}}" class="btn btn-primary">Absen</a>
                                        @else
                                            <a href="/guru/absen/{{$item->id_jadwal}}" class="btn btn-primary disabled">Absen Belum Dibuka</a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        @foreach ($data as $item)
                            @php
                                $index = 1
                            @endphp
                            @foreach ($dataAbsenToday as $absenToday)
                                @if ($item->id_jadwal == $absenToday->id_jadwal)
                                    @break
                                @else
                                    @if ($index < $count)
                                        @php
                                            $index=$index+1;
                                        @endphp
                                    @else
                                        @if ($time <= $item->jam_selesai)
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3>{{$item->nama_mapel}} - {{$item->tingkat_kelas}} {{$item->nama_prodi}} {{$item->grup}}</h3>
                                                    <h5>{{$item->jam_mulai}} - {{$item->jam_selesai}}</h5>
                                                    @if ($time >= $item->jam_mulai)
                                                        <a href="/guru/absen/{{$item->id_jadwal}}" class="btn btn-primary">Absen</a>
                                                    @else
                                                        <a href="/guru/absen/{{$item->id_jadwal}}" class="btn btn-primary disabled">Absen Belum Dibuka</a>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                    @endif

                    


                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Informasi --}}
    
@endsection