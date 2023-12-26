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
                <h1 class="m-0 text-dark">Attendances</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Attendance</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
</div>
<!-- /.content-header -->

<!-- Main content -->
	@section('content')
    <div class="container">
        <h2>Attendance List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student</th>
                    <th>Date</th>
                    <th>Is Present</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $attendance->student->name }}</td>
                        <td>{{ $attendance->date }}</td>
                        <td>{{ $attendance->is_present ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection