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
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Class Name</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Class</li>
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

		<div class="card">
		<div class="card-header text-right">
				<a href="{{ route('createKelas') }}" class="btn btn-primary" role="button">Add Class</a>
			</div>
			<div class="card-body">
				<table class="table table-hover table-bordered mb-0" id="data-table">
					<thead>
						<tr>
							<th>No.</th>
							<th>Class Name</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($kelass as $kelas)
<tr>
    <td> {{ $loop->index + 1 }}</td>
    <td> {{ $kelas->name }}</td>
    <td> {{ $kelas->description }} </td>
    <td>
                            <a href="{{ route('editKelas', ['kelas'=> $kelas->id]) }}" class="btn btn-warning btn-sm" role="button">Update</a>
                            <a onclick="confirmDelete(this)" data-url="{{ route('deleteKelas', ['kelas'=> $kelas->id]) }}" class="btn btn-danger btn-sm" role="button">Delete</a>
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