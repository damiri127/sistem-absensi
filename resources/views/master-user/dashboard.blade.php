@extends('layout.admin')
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
				@if (auth()->user()->level == "Admin")
					<a href="/master-user/admin/{{auth()->user()->id}}" class="btn btn-white btn-border btn-round mr-2">Profil Saya</a>
				@else
					<a href="/master-user/tata-usaha/{{auth()->user()->id}}" class="btn btn-white btn-border btn-round mr-2">Profil Saya</a>
				@endif
                <a href="/master-user/mengelola_absensi" class="btn btn-secondary btn-round">Informasi Absensi</a>
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
                <div class="card-category">{{$now->toRfc850String()}}</div>
                <div class="mt-3">
                    <div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-users"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Informasi Pengguna</p>
												<h4 class="card-title">{{$jumlah_user}}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-info card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-interface-6"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Informasi Absensi</p>
												<h4 class="card-title">{{$jumlah_absensi}}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-success card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-analytics"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Jadwal Belajar</p>
												<a href="#"><h4 class="card-title">{{$jumlah_jadwal}}</h4></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-secondary card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Kelas</p>
												<h4 class="card-title">{{$jumlah_kelas}}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Informasi --}}
    
@endsection