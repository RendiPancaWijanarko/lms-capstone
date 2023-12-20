@extends('layouts.master')

@section('addCss')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('addJavascript')
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script>
	$(function() {
		$("#data-table").DataTable();
	})
</script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script>
confirmDelete = function(button) {
	var url = $(button).data('url');
	swal({
		'title':'konfirmasi Hapus',
		'text': 'Apakah kamu yakin ingin menghapus data ini?',
		'dangermode' : true,
		'buttons':true
	}).then(function(value) {
		if (value) {
			window.location = url;
		}
	})
}
</script>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-8">
				<h1 class="m-0 text-dark">Detail Teacher</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Teacher</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
	<div class="card-body">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <img src="{{ Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image" style="width: 150px; height: 150px;">
                </div>
                @foreach ($teachers as $teacher)
                <div class="col-md-9">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="name" class="form-label"><strong>Name:</strong></label>
                                <p style="border: 2px solid #000; padding: 10px; margin-bottom: 10px;">{{ $teacher->nama }}</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="email" class="form-label"><strong>Email:</strong></label>
                                <p style="border: 2px solid #000; padding: 10px; margin-bottom: 10px;">{{ $teacher->email }}</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="phone" class="form-label"><strong>Phone:</strong></label>
                                <p style="border: 2px solid #000; padding: 10px; margin-bottom: 10px;">{{ $teacher->phone }}</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="category" class="form-label"><strong>Category:</strong></label>
                                <p style="border: 2px solid #000; padding: 10px; margin-bottom: 10px;">{{ $teacher->category }}</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="description" class="form-label"><strong>Description:</strong></label>
                         <textarea style="width: 100%; border: 2px solid #000; padding: 10px; margin-bottom: 10px;">{{ $teacher->deskripsi }}</textarea>
                        </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 text-end">
                                <div class="btn-group" role="group" aria-label="Action buttons">
                                    <a href="{{ route('editTeacher', ['teacher'=> $teacher->id]) }}" class="btn btn-warning btn-sm" role="button">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>



	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection