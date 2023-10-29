@extends('kepala-sekolah.layout.kepsek')
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
                <a href="/kepala-sekolah/profile" class="btn btn-white btn-border btn-round mr-2">Profil Saya</a>
                <a href="/dashboard-kepsek/laporan" class="btn btn-secondary btn-round">Informasi Absensi</a>
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
            </div>
        </div>
    </div>
</div>
{{-- End Informasi --}}
    
@endsection