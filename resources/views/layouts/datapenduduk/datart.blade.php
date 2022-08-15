@extends('layouts.dashboard_sidebar.sidebar')

@section('content')
    
    <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data RT Kelurahan Gunung Samarinda Baru</h3>
						<div class="right">
							<!-- <button> <a class="btn btn-primary" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah RT</button> -->
							<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Tambah RT</button>
						</div>
					</div>
					<div class="panel-body no-padding">
						<table class="table table-hover">
							<thead>
								<tr>
									<!-- <th>No</th> -->
									<th>No</th>
									<th>RT</th>
									<th>Ketua RT</th>
                                    <th>No Telepon</th>
                                    <th>Action</th>

								</tr>
							</thead>
							<tbody>
                            @foreach ($datart as $datart)
								<tr>
								{{-- <td>{{$datart->id}}</td> --}}
									<td>{{$loop->iteration}}</td>
									<td>{{$datart->rt}}</td>
                                    <th>{{$datart->ketuart}}</th>
									<td>{{$datart->alamatrt}}</td>
                                    <td><a class="btn btn-secondary" href="/dashboard-editrt/{{$datart->id}}">Edit</button><a class="btn btn-danger" href="/dashboard-deletert/{{ $datart->id }}">Delete</button></td>
								</tr>
                                @endforeach
							</tbody>
						</table>
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-6"><span class="panel-note">Data RT Kelurahan Gunung Samarinda Baru Kota Balikpapan</span></div>
						</div>
					</div>
				</div>
			<!-- END MAIN CONTENT -->
            
             <!-- Modal -->
	            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data RT</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/dashboard-tambahdatart" method="post" enctype="multipart/form-data">
						{{csrf_field()}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">RT</label>
                                <input name="rt" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan RT" required value="RT ">
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Ketua RT</label>
                                <input name="ketuart" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Ketua RT" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat RT</label>
                                <input name="alamatrt" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Lokasi RT" required>
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
