@extends('layouts.dashboard_sidebar.sidebar')

@section('content')
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">

				<!-- OVERVIEW -->
				<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Selamat Datang Di SIMPEL</h3>
					<p class="panel-subtitle">Sistem Informasi Manajemen dan Pelayanan <br>Kelurahan Gunung Samarinda Baru Kota Balikpapan</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="metric">
								<span class="icon"><i class="lnr lnr-enter"></i></span>
								<p>
									<span class="number">{{totalpengunjung()}}</span>
									<span class="title">Pengunjung</span>
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="metric">
								<span class="icon"><i class="lnr lnr-users"></i></span>
								<p>
									<span class="number">{{totalpegawai()}}</span>
									<span class="title">Jumlah Pegawai</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END OVERVIEW -->
			<div class="row">
				<div class="col-md-12">
					<!-- RECENT PURCHASES -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Pengunjung</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama</th>
										<th>Nik</th>
										<th>Alamat</th>
										<th>No Telepon</th>
										<th>Menemui</th>
										<th>Keperluan</th>
										<th>Waktu</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($bukutamu as $bukutamu)
									<tr>
										{{-- <td>{{$bukutamu->id}}</td> --}}
										<td>{{$loop->iteration}}</td>
										<td>{{$bukutamu->nama}}</td>
										<td>{{$bukutamu->nik}}</td>
										<td>{{$bukutamu->alamat}}</td>
										<td>{{$bukutamu->notelepon}}</td>
										<td>{{$bukutamu->menemui}}</td>
										<td>{{$bukutamu->keperluan}}</td>
										<td>{{$bukutamu->waktu}}</td>
										<th><a class="btn btn-secondary" href="/dashboard-editpegawai/{{$bukutamu->id}}/profil">Edit</button> <a class="btn btn-danger" href="/datapengunjung-delete/{{ $bukutamu->id }}">Delete</button></th>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Data Pengunjung Kelurahan Gunung Samarinda Baru Kota Balikpapan</span></div>
								<div class="col-md-6 text-right"><a class="btn btn-primary" href="/export-datapengunjung" title="Export To Excel" ><i class="lnr lnr-download"></i> <span>Export To Excel</span></a></div>
								<!-- <div class="col-md-6 text-right"><a href="/export-datapengunjung" class="btn btn-primary"><li class="lnr lnr-file-empty"></li>Export to Excel</a></div> -->
							</div>
						</div>
					</div>
					<!-- END RECENT PURCHASES -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->


			@endsection

			