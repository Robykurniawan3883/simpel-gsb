<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SIMPEL | GSB </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/index.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="loginassets/img/logo_pemkot.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="loginassets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="loginassets/css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="loginassets/font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="loginassets/css/style.css">

	<link href={{asset("assets/css/style.css")}} rel="stylesheet">
	<link href={{asset("assets/css/color/default.css")}} rel="stylesheet" id="option-color">
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
		<div class="container">

			<a class="navbar-brand pt-0 logo" href="#home">
				<img src={{asset("loginassets/img/group_13.png")}} alt="" class="img-fluid logo-light">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="mdi mdi-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item">
						<a class="nav-link" href="{{route('page-bukutamu')}}">Buku Tamu</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/feedback">feedback</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('page-login')}}">Admin</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="fxt-template-animation fxt-template-layout2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<h1><strong>FEEDBACK </strong></h1>
							<h3>KANTOR KELURAHAN GUNUNG SAMARINDA</h3>
						</div>
						<div class="fxt-form">
							<form action="/tambah-feedback" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="nama" class="form-control" name="nama" placeholder="NAMA" required="required">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="feedback" class="form-control" name="feedback" placeholder="Masukan untuk Pelayanan" required="required" height="200px">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
										<button type="submit" class="fxt-btn-fill">SUBMIT</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12 fxt-none-991 fxt-bg-img" data-bg-image="loginassets/img/image.jpg"></div>
			</div>
		</div>
	@include('sweetalert::alert')
	</section>
	<!-- jquery-->
	<script src="loginassets/js/jquery-3.5.0.min.js"></script>
	<!-- Popper js -->
	<script src="loginassets/js/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="loginassets/js/bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="loginassets/js/imagesloaded.pkgd.min.js"></script>
	<!-- Validator js -->
	<script src="loginassets/js/validator.min.js"></script>
	<!-- Custom Js -->
	<script src="loginassets/js/main.js"></script>
	<script src="loginassets/js/index.js"></script>

</body>

</html>