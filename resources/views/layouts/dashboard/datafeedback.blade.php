@extends('layouts.dashboard_sidebar.sidebar')

@section('content')

		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Saran dan Masukkan Masyarakat</h3>
				</div>


                <div class="row">
                @foreach ($feedback as $feedback)
                    <div class="col-md-6">
                    {{-- <td>{{$datapegawai->id}}</td> --}}
                        <!-- PANEL WITH FOOTER -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{$feedback->nama}}</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <p>{{$feedback->feedback}}</p>
                            </div>
                            <div class="panel-footer">
                                <a class="btn btn-danger" href="/dashboard-datafeedbackdelete/{{$feedback->id}}">Hapus Saran</button></a>
                                <!-- <button type="button" class="btn btn-danger" href="/dashboard-datafeedbackdelete/{{$feedback->id}}">Delete</button> -->
                            </div>
                        </div>
                        <!-- END PANEL WITH FOOTER -->
                    </div>
                @endforeach
                </div>

                    
       


@endsection
