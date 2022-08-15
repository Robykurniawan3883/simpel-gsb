@extends('layouts.dashboard_sidebar.sidebar')

@section('content')


<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Ubah Data Kepala Keluarga</h3>
                        <br>
                        <form action="/dashboard-editkepalakeluarga/{{$datakepalakeluarga->id}}/edit" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
							{{method_field('PUT')}}

                            <div class="form-group">
								<label class="form-label" for="customFile">Masukkan Scan KK (.pdf) </label>
								<input type="file" name="imagekk" class="form-control" id="customFile" accept="application/pdf" required/>
							</div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kepala Keluarga</label>
                                <input name="kepalakeluarga" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Kepala Keluarga" value="{{$datakepalakeluarga->kepalakeluarga}}" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">No Kartu Kepala Keluarga</label>
                                <input name="nokk" type="number" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan No Kartu Keluarga" value="{{$datakepalakeluarga->nokk}}" required>
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
                                <input name="tempattinggal" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Tempat Tinggal Kepala Keluarga" value="{{$datakepalakeluarga->tempattinggal}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telepon Kepala Keluarga</label>
                                <input name="notelepon" type="number" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan No Telepon Kepala Keluarga" value="{{$datakepalakeluarga->notelepon}}" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Keluarga</label>
                                <input name="jumlahkeluarga" type="number" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Jumlah Keluarga" value="{{$datakepalakeluarga->jumlahkeluarga}}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </form>
						</div>
					</div>
				</div>

                        @endsection
