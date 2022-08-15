@extends('layouts.dashboard_sidebar.sidebar')

@section('content')


<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Ubah Data RT</h3>
                        <form action="/dashboard-datakepalakeluarga/create" method="post">
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
                                    <option value="{{$item->id}}">{{$item->datart}}</option>
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
