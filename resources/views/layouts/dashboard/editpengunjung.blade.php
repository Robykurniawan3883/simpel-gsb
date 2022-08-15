@extends('layouts.dashboard_sidebar.sidebar')

@section('content')


<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Pegawai</h3>
                        <form action="/datapengunjung-update/{{$bukutamu->id}}/update" method="post">
							{{csrf_field()}}
							{{method_field('PUT')}}

							<div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" value="{{$bukutamu->id}}" required="required"></div>

							<div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" value="{{$bukutamu->nama}}" required="required">
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">NIK</label>
                                <input name="nik" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan NIK" value="{{$bukutamu->nik}}" required="required">
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input name="alamat" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Alamat" value="{{$bukutamu->alamat}}" required="required">
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Noo Telepon</label>
                                <input name="notelepon" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan No Telepon" value="{{$bukutamu->notelepon}}" required="required">
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Menemui</label>
                                <input name="menemui" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ingin Menemui" value="{{$bukutamu->menemui}}" required="required">
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Keperluan</label>
                                <input name="keperluan" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Keperluan" value="{{$bukutamu->keperluan}}"required="required">
                            </div>
							<div class="form-group">
							<label for="exampleInputEmail1">Waktu</label>
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="datetime-local" class="form-control" name="waktu" placeholder="waktu" required="required" min="2018-06-07 00:00" value="{{$bukutamu->waktu}}" required="required">
									</div>
								</div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">update</button>
                        </form>

                        @endsection
