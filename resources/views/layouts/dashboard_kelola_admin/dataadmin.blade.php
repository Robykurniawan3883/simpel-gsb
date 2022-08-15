@extends('layouts.dashboard_sidebar.sidebar')

@section('content')
    
    <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Selamat Datang di Data Admin</h3>
						<div class="right">
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">Tambah Admin</button>
						</div>
					</div>
					<div class="panel-body no-padding">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Level</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($User as $user)
								<tr>
								{{-- <td>{{$user->id}}</td> --}}
									<td>{{$loop->iteration}}</td>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->level}}</td>
									<td><a class="btn btn-link" href="/dashboard-dataadminupdate/{{$user->id}}">Edit</button> <a class="btn btn-danger" href="/dashboard-dataadmindelete/{{$user->id}}">Delete</button></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-6"><span class="panel-note">Data Admin Kelurahan Gunung Samarinda Baru</span></div>
						</div>
					</div>
				</div>
			<!-- END MAIN CONTENT -->

	 <!-- Modal -->
	 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/dashboard-dataadmin/create" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="name" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level Akun</label>
                                <select name="level" class="form-control" aria-label="Pilih Role" required="required">
                                    <option value="Admin">Admin</option>
									<option value="Pelayanan">Pelayanan</option>
									<option value="Manajemen">Manajemen</option>
									<option value="KetuaRT">KetuaRT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input name="password" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan No Telepon" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah Admin</button>
                        </form>
						</div>
					</div>
				</div>
				@include('sweetalert::alert')

				
						@endsection
