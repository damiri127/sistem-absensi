<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Title pada setiap halaman akan berbeda  -->
	<title>Admin | Halaman Dashboard</title> 
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset("layout_asset/examples/assets/img/logo.jpg")}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/webfont/webfont.min.js")}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{asset("layout_asset/examples/assets/css/fonts.min.css")}}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset("layout_asset/examples/assets/css/bootstrap.min.css")}}">
	<link rel="stylesheet" href="{{asset("layout_asset/examples/assets/css/atlantis.min.css")}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset("layout_asset/examples/assets/css/demo.css")}}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo">
					<img src="{{asset("layout_asset/examples/assets/img/White-2.ico")}}" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{asset("layout_asset/examples/assets/img/profile.jpg")}}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{asset("layout_asset/examples/assets/img/profile.jpg")}}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">Tampilkan Profil Saya</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Pengaturan Akun</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Keluar</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset("layout_asset/examples/assets/img/profile.jpg")}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Nama Admin
									<span class="user-level">Admin</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="/admin"  aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Beranda</p>
								<!-- <span class="caret"></span> -->
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Data Master</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-users"></i>
								<p>Pengguna</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="admin/mengelola_admin">
											<span class="sub-item">Admin</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Kepala Sekolah</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Tata Usaha</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Guru</span>
										</a>
									</li>
									<li>
								</ul>
							</div>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Absensi Guru</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Data Pendukung</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="#">
											<span class="sub-item">Program Studi</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Kelas</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Mata Pelajaran</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Jadwal Pembelajaran</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Hitungan Penggajian</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Data Absensi</p>
							</a>
						</li>
						<li class="mx-4 mt-2">
							<a href="#" class="btn btn-default btn-block"><span class="btn-label mr-2"> <i class="fas fa-power-off"></i> </span>Keluar</a> 
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<!-- CONTENT START IN HERE! -->
                @yield('content')
                {{-- End Content --}}
			</div>
			<!-- FOOTER -->
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="#">
									<img src="{{asset("layout_asset/examples/assets/img/logo.ico")}}" type="image/x-icon" alt="">SMKS TELADAN KERTAS MAYA
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						<img src="{{{("layout_asset/examples/assets/img/POLINDRA.ico")}}}" alt="" type="image/x-icon" width="10%"> <a href="#" >Politeknik Negeri Indramayu</a>
					</div>				
				</div>
			</footer>
			<!-- End FOOTER -->
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{asset("layout_asset/examples/assets/js/core/jquery.3.2.1.min.js")}}"></script>
	<script src="{{asset("layout_asset/examples/assets/js/core/popper.min.js")}}"></script>
	<script src="{{asset("layout_asset/examples/assets/js/core/bootstrap.min.js")}}"></script>

	<!-- jQuery UI -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js")}}"></script>
	<script src="{{asset("layout_asset/examples/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js")}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js")}}"></script>


	<!-- Chart JS -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/chart.js/chart.min.js")}}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js")}}"></script>

	<!-- Chart Circle -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/chart-circle/circles.min.js")}}"></script>

	<!-- Datatables -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/datatables/datatables.min.js")}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js")}}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/jqvmap/jquery.vmap.min.js")}}"></script>
	<script src="{{asset("layout_asset/examples/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js")}}"></script>

	<!-- Sweet Alert -->
	<script src="{{asset("layout_asset/examples/assets/js/plugin/sweetalert/sweetalert.min.js")}}"></script>

	<!-- Atlantis JS -->
	<script src="{{asset("layout_asset/examples/assets/js/atlantis.min.js")}}"></script>

	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>