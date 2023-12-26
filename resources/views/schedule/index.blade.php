@extends('layouts.master')

@section('addCss')
<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
@endsection

@section('addJavascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script>
    $(function() {
        $("#data-table").DataTable();
    })

    confirmDelete = function(button) {
        var url = $(button).data('url');
        swal({
            'title': 'konfirmasi Hapus',
            'text': 'Apakah kamu yakin ingin menghapus data ini?',
            'dangermode': true,
            'buttons': true
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
                <h1 class="m-0 text-dark">Class Schedule</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Schedule</li>
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
				<a href="{{ route('createSchedule') }}" class="btn btn-primary" role="button">Add Schedule</a>
			</div>
        <div class="card-body">
            <table class="table table-hover table-bordered mb-0" id="data-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Class Name</th>
                        <th>Date</th>
                        <th>Schedule Description</th>
                        <th>Meet Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                    <tr>
                        <td> {{ $loop->index + 1 }}</td>
                        <td>{{ $schedule->kelas ? $schedule->kelas->name  :'-'}}</td>
                        <td> {{ $schedule->date_schedule }}</td>
                        <td> {{ $schedule->description }} </td>
                        <td><a href="{{ $schedule->meet_link }}" target="_blank">Join Class</a></td>
                        <td>
                            <a href="{{ route('editSchedule', ['schedule'=> $schedule->id]) }}" class="btn btn-warning btn-sm" role="button">Update</a>
                            <a onclick="confirmDelete(this)" data-url="{{ route('deleteSchedule', ['schedule'=> $schedule->id]) }}" class="btn btn-danger btn-sm" role="button">Delete</a>
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
