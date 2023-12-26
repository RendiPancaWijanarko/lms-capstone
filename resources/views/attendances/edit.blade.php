@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Update Attendance</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Attendances</li>
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
        <h2>Edit Attendance</h2>

        <form method="post" action="">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="student_id">Select Student:</label>
                <select name="student_id" id="student_id" class="form-control" required>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}" {{ $attendance->student_id == $student->id ? 'selected' : '' }}>
                            {{ $student->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $attendance->date }}" required>
            </div>

            <div class="form-group">
                <label for="is_present">Is Present:</label>
                <select name="is_present" id="is_present" class="form-control" required>
                    <option value="1" {{ $attendance->is_present ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$attendance->is_present ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection