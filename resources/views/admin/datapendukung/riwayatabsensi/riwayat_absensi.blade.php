@extends('layout.admin')
@section('content')
    <div class="page-inner">
        @foreach ($tahun_ajaran as $item)
            <a href="/master-user/riwayat_absensi_by_semester/{{$item->id_tahun_ajaran}}" class="btn btn-primary mb-3">Data {{$item->tahun_mulai}}/{{$item->tahun_selesai}} - Semester
            @if ($item->isSemesterGanjil)
                Ganjil
            @else
                Genap
            @endif 
            </a> <br>
        @endforeach
    </div>
@endsection