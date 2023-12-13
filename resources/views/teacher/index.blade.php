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
				<table class="table table-hover table-bordered mb-0" id="data-table">
					<thead>
						<tr>
							<th>No.</th>
							<th>Name</th>
							<th>teacher description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($teachers as $teacher)
<tr>
    <td> {{ $loop->index + 1 }}</td>
    <td> {{ $teacher->nama }}</td>
    <td> {{ $teacher->deskripsi }} </td>
    <td>
        <a href="" class="btn btn-warning btn-sm" role="button">Edit</a>
		<a onclick="confirmDelete(this)" data-url="" class="btn btn-danger btn-sm" role="button">Hapus</a>

    </td>
</tr>
@endforeach
					</tbody>
				</table>
			</div>

		</div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection