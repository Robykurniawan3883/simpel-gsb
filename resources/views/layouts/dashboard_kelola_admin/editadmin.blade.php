@extends('layouts.dashboard_sidebar.sidebar')

@section('content')


<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Edit Data Admin</h3>
                        <br>
                        <form action="/dashboard-dataadminupdate/{{$User->id}}/update" method="post">
							{{csrf_field()}}
							{{method_field('PUT')}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="name" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" required value="{{$User->name}}">
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Email" required value="{{$User->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level Akun</label>
                                <select name="level" class="form-control" aria-label="Pilih Role" required="required">
                                    <option value="Admin">Admin</option>
									<option value="Pelayanan">Pelayanan</option>
									<option value="Manajemen">Manajemen</option>
                                    <option value="KetuaRt">KetuaRT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input name="password" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan No Telepon" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Ubah Data Admin</button>
                        </form>

                        @endsection
