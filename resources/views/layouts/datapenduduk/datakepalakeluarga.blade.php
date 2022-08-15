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
					<h3 class="panel-title">Data Kepala Keluarga</h3>
					<p class="panel-subtitle">Sistem Informasi Manajemen dan Pelayanan <br>Kelurahan Gunung Samarinda Baru Kota Balikpapan</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="metric">
								<span class="icon"><i class="lnr lnr-user"></i></span>
								<p>
									<span class="number">{{totalkepalakeluarga()}}</span>
									<span class="title">KEPALA KELUARGA</span>
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="metric">
								<span class="icon"><i class="lnr lnr-users"></i></span>
								<p>
									<span class="number">{{$datakepalakeluarga->sum('jumlahkeluarga')}}</span>
									<span class="title">JIWA</span>
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
							<h3 class="panel-title">Data Kepala Keluarga</h3>
							<div class="right">
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">Tambah Kepala Keluarga</button>
							</div>
						</div>
						<!-- <div class="input-group rounded">
							<form action="/dashboard-datakepalakeluarga" method="GET">
								<input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
								<span class="input-group-text border-0" id="search-addon">
							</form>
						</div> -->
						<div class="panel-body no-padding">
							<table class="table table-sortable" id="example">
								<thead>
									<tr>
										<th>No.</th>
										<th>Kepala Keluarga</th>
										<th>No Kartu Keluarga</th>
										<th>RT</th>
										<th>Tempat Tinggal</th>
										<th>No Telepon</th>
										<th>Jumlah Keluarga</th>
										<th>Data KK</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

								@foreach ($datakepalakeluarga as $datakepalakeluarga)
									<tr>
									{{-- <td>{{$datakepalakeluarga->id}}</td> --}}
										<td>{{$loop->iteration}}</td>
										<td>{{$datakepalakeluarga->kepalakeluarga}}</td>
										<td>{{$datakepalakeluarga->nokk}}</td>
										<td>{{$datakepalakeluarga->datart->rt}}</td>
										<td>{{$datakepalakeluarga->tempattinggal}}</td>
										<td>{{$datakepalakeluarga->notelepon}}</td>
										<td>{{$datakepalakeluarga->jumlahkeluarga}}<span>JIWA</span></td>
										<td><a class="btn btn-primary" href="{{asset('scankk/' . $datakepalakeluarga->imagekk)}}">Lihat KK</button></td>
										<th><a class="btn btn-secondary" href="/dashboard-editkepalakeluarga/{{$datakepalakeluarga->id}}">Edit</button><span></span> <a class="btn btn-danger" href="/dashboard-deletekk/{{$datakepalakeluarga->id}}">Delete</button></th>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"><span class="panel-note"></i>Kelurahan Gunung Samarinda Baru Kota Balikpapan</span></div>
							</div>
						</div>
					</div>
					<!-- END RECENT PURCHASES -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
            
             <!-- Modal -->
	            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kepala Keluarga</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/dashboard-datakepalakeluarga/create" method="post" enctype="multipart/form-data">
						{{csrf_field()}}

						<div class="form-group">
								<label class="form-label" for="customFile">Masukkan Scan KK (.pdf) </label>
								<input type="file" name="imagekk" class="form-control" id="customFile" accept="application/pdf" required/>
							</div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kepala Keluarga</label>
                                <input name="kepalakeluarga" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Kepala Keluarga" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">No Kartu Kepala Keluarga</label>
                                <input name="nokk" type="number" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan No Kartu Keluarga" required>
                            </div>
							<div class="form-group">

                                <label for="exampleInputEmail1">RT</label>
                                <select selected name="datart_id" id="datart_id" class="form-control" aria-label="Pilih RT" required="required">
									@foreach ($dtrt as $item)
                                    <option value="{{$item->id}}">{{$item->rt}}</option>
									@endforeach
                                </select>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Tempat Tinggal Kepala Keluarga</label>
                                <input name="tempattinggal" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Tempat Tinggal Kepala Keluarga" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telepon Kepala Keluarga</label>
                                <input name="notelepon" type="number" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan No Telepon Kepala Keluarga" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Keluarga</label>
                                <input name="jumlahkeluarga" type="number" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Jumlah Keluarga" required>
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

				