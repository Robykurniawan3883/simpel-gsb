<!doctype html>
<html lang="en">

<head>
	<title>Dashboard SIMPEL | GSB</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href={{asset("dashboard_Admin/assets/vendor/bootstrap/css/bootstrap.min.css")}}>
	<link rel="stylesheet" href={{asset("dashboard_Admin/assets/vendor/font-awesome/css/font-awesome.min.css")}}>
	<link rel="stylesheet" href={{asset("dashboard_Admin/assets/vendor/linearicons/style.css")}}>
	<link rel="stylesheet" href={{asset("dashboard_Admin/assets/vendor/chartist/css/chartist-custom.css")}}>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href={{asset("dashboard_Admin/assets/css/main.css")}}>
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href={{asset("dashboard_Admin/assets/css/demo.css")}}>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link href="cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" >
	<link href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="76x76" href={{asset("dashboard_Admin/assets/img/logo_pemkot.png")}}>
	<link rel="icon" type="image/png" sizes="96x96" href={{asset("dashboard_Admin/assets/img/logo_pemkot.png")}}>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="/dashboard-datapengunjung"><img src="dashboard_Admin/assets/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<!-- <div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div> -->
				<!-- <form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Cari Pengguna">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Cari</button></span>
					</div>
				</form> -->
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-danger" href="/logout" title="logout" ><i class="bi bi-door-closed"></i> <span>Logout</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a  class="dropdown-toggle" data-toggle="dropdown"><img src={{asset("dashboard_Admin/assets/img/user.png")}} class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span></a>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<br>
					<ul class="nav">
						<li><a href="/dashboard-welcome" ><i class="lnr lnr-calendar-full"></i> <span>Welcome Page</span></a></li>
						@if (Auth::user()->level === 'Admin' || Auth::user()->level === 'Pelayanan')
						<li><a href="{{url('/dashboard-datapengunjung')}}" ><i class="lnr lnr-calendar-full"></i> <span>Data Pengunjung</span></a></li>
						@endif
						<li>
							@if (Auth::user()->level === 'Admin' || Auth::user()->level === 'Manajemen' || Auth::user()->level === 'KetuaRT')
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>Data Kependudukan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="/dashboard-datapenduduk" ><i class="lnr lnr-users"></i> <span>Data RT</span></a></li>
									<li><a href="/dashboard-datakepalakeluarga" ><i class="lnr lnr-users"></i> <span>Data Kepala Keluarga</span></a></li>
								</ul>
							</div>
							@endif
						</li>
						<li>
							@if (Auth::user()->level === 'Admin' || Auth::user()->level === 'Manajemen')
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-book"></i> <span>Feedback dan Admin</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							@endif
								<div id="subPages2" class="collapse ">
									<ul class="nav">
										@if (Auth::user()->level === 'Admin')
										<li><a href="/dashboard-dataadmin" ><i class="lnr lnr-user"></i> <span>Data Admin</span></a></li>
										@endif
										
										@if (Auth::user()->level === 'Admin' || Auth::user()->level === 'Manajemen')
										<li><a href="/dashboard-datafeedback" ><i class="lnr lnr-page-break"></i> <span>Data Feedback</span></a></li>
										@endif
									</ul>
								</div>
						</li>
						@if (Auth::user()->level === 'Admin' || Auth::user()->level === 'Manajemen')
						<li><a href="{{url('/dashboard-datapegawai')}}" class=""><i class="lnr lnr-user"></i> <span>Daftar Pegawai</span></a></li>
						@endif
					
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->



        @yield ('content')

        </div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2022 <a href="http://gunungsamarindabaru.balikpapan.go.id/content/99/gambaran-umum">Kelurahan Gunung Samarinda Baru</a>Kota Balikpapan</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src={{asset("dashboard_Admin/assets/vendor/jquery/jquery.min.js")}}></script>
	<script src={{asset("dashboard_Admin/assets/vendor/bootstrap/js/bootstrap.min.js")}}></script>
	<script src={{asset("dashboard_Admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js")}}></script>
	<script src={{asset("dashboard_Admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js")}}></script>
	<script src={{asset("dashboard_Admin/assets/vendor/chartist/js/chartist.min.js")}}></script>
	<script src={{asset("dashboard_Admin/assets/scripts/klorofil-common.js")}}></script>
	<script src={{asset("dashboard_Admin/assets/scripts/klorofil-common.js")}}></script>
	<script src={{asset("dashboard_Admin/assets/js/sortdata.js")}}></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);

	});
	</script>
</body>

</html>