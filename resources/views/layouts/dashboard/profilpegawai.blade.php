@extends('layouts.dashboard_sidebar.sidebar')

@section('content')


<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-profile">
				<div class="clearfix">
					<!-- PROFILE HEADER -->
					<div class="profile-header">
						<div class="overlay"></div>
						<div class="profile-main">
							<img width="250" height="250" src="{{asset('images/' . $datapegawai->image)}}" class="img-circle" alt="image">
							<h3 class="nama">{{$datapegawai->nama}}</h3>
							<span>{{$datapegawai->jabatan}}</span>
						</div>
					</div>
					<!-- END PROFILE HEADER -->
					<!-- PROFILE DETAIL -->
					<div class="profile-detail">
						<div class="profile-info">
							<h4 class="heading">Data Diri Pegawai</h4>
							<ul class="list-unstyled list-justify">
								<li>Email <span>{{$datapegawai->email}}</span></li>
								<li>NIP <span>{{$datapegawai->nip}}</span></li>
								<li>NPWP <span>{{$datapegawai->npwp}}</span></li></span></li>
								<li>Pangka/Golongan <span>{{$datapegawai->pangkat}}</span></li>
								<li>No Telepon <span>{{$datapegawai->notelepon}}</span></li>
							</ul>
						</div>
						<div class="text-center"><a href="/dashboard-editpegawai/{{$datapegawai->id}}/edit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ubah Data Pegawai</a></div>
					</div>
					<!-- END PROFILE DETAIL -->
				</div>
				<!-- END LEFT COLUMN -->
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ubah Data Pegawai</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<form action="/dashboard-editpegawai/{{$datapegawai->id}}/edit" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					{{method_field('PUT')}}

					<div class="form-group">
						<label class="form-label" for="customFile">Masukkan Foto Profil</label>
						<input type="file" name="image" class="form-control" id="customFile" />
					</div>
					<div class="form-group">
						<input type="hidden" name="id" class="form-control" id="id" value="{{$datapegawai->id}}">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Nama Lengkap</label>
						<input name="nama" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" value="{{$datapegawai->nama}}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input name="email" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Email" value="{{$datapegawai->email}}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Jabatan</label>
						<input name="jabatan" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Jabatan Pegawai" value="{{$datapegawai->jabatan}}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">NPWP</label>
						<input name="npwp" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan NPWP" value="{{$datapegawai->npwp}}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">nip</label>
						<input name="nip" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan nip" value="{{$datapegawai->nip}}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Pangkat</label>
						<select name="pangkat" class="form-control" aria-label="Pilih Pangkat Pegawai" value="{{$datapegawai->pangkat}}">
							<option value="Juru Muda/Golongan I">Juru Muda/Golongan I</option>
							<option value="Juru Muda Tingkat I/Golongan I">Juru Muda Tingkat I/Golongan I</option>
							<option value="Juru/Golongan I">Juru/Golongan I</option>
							<option value="Juru Tingkat I/Golongan I">Juru Tingkat I/Golongan I</option>
							<option value="Pengatur Muda/Golongan II">Pengatur Muda/Golongan II</option>
							<option value="Juru Muda/Golongan II">Juru Muda/Golongan II</option>
							<option value="Juru Muda/Golongan II">Juru Muda/Golongan II</option>
							<option value="Juru Muda/Golongan II">Juru Muda/Golongan II</option>
							<option value="Juru Muda/Golongan II">Juru Muda/Golongan II</option>
							<option value="Juru Muda/Golongan III">Juru Muda/Golongan III</option>
							<option value="Juru Muda/Golongan III">Juru Muda/Golongan III</option>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">No Telepon</label>
						<input name="notelepon" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan No Telepon" value="{{$datapegawai->notelepon}}">
					</div>

			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">update</button>
				</form>
			</div>
		</div>
	</div>
	@include('sweetalert::alert')


	@endsection