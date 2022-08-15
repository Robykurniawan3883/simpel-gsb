@extends('layouts.dashboard_sidebar.sidebar')

@section('content')
    
    <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Selamat Datang di Data Pegawai</h3>
						<div class="right">
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">Tambah Pegawai</button>
						</div>
					</div>
					<div class="panel-body no-padding">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Jabatan</th>
									<th>NIP</th>
									<th>Pangkat/Golongan</th>
									<th>No Telepon</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($datapegawai as $datapegawai)
								<tr>
								{{-- <td>{{$datapegawai->id}}</td> --}}
									<td>{{$loop->iteration}}</td>
									<td><a href="/dashboard-profilpegawai/{{$datapegawai->id}}/profil">{{$datapegawai->nama}}</a></td>
									<td>{{$datapegawai->email}}</td>
									<td>{{$datapegawai->jabatan}}</td>
									<td>{{$datapegawai->nip}}</td>
									<td>{{$datapegawai->pangkat}}</td>
									<td>{{$datapegawai->notelepon}}</td>
									<td><a class="btn btn-danger" href="/dashboard-profildelete/{{ $datapegawai->id }}">Delete</button></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-6"><span class="panel-note">Data Pegawai Kelurahan Gunung Samarinda Baru Kota Balikpapan</span></div>
						</div>
					</div>
				</div>
			<!-- END MAIN CONTENT -->

	 <!-- Modal -->
	 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{url('/dashboard-createpegawai')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						
							<div class="form-group">
								<label class="form-label" for="customFile">Masukkan Foto Profil</label>
								<input type="file" name="image" class="form-control" id="customFile" required/>
							</div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Email" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Jabatan</label>
                                <input name="jabatan" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Jabatan Pegawai" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">NPWP</label>
                                <input name="npwp" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan NPWP" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">nip</label>
                                <input name="nip" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan nip" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pangkat</label>
                                <select name="pangkat" class="form-control" aria-label="Pilih Pangkat Pegawai" required="required">
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
                                <input name="notelepon" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan No Telepon" required>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
						</div>
					</div>
				</div>
				@include('sweetalert::alert')
				
						@endsection
