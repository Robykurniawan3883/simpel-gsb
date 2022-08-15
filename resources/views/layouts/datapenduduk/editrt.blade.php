@extends('layouts.dashboard_sidebar.sidebar')

@section('content')


<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Ubah Data RT</h3>
                        <form action="/dashboard-updatert/{{$datart->id}}/update" method="post">
							{{csrf_field()}}
							{{method_field('PUT')}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">RT</label>
                                <input name="rt" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan RT" value="{{$datart->rt}}" required>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">Ketua RT</label>
                                <input name="ketuart" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Ketua RT" value="{{$datart->ketuart}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat RT</label>
                                <input name="alamatrt" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Lokasi RT" value="{{$datart->alamatrt}}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </form>

@endsection
