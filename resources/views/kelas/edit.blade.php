@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Update Class</h1>
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
			<div class="card-body">
			<form action="{{ route('updateKelas', ['kelas' => $kelas->id]) }}" method="post">
					@csrf
					<div class="form-group">
						<label for="name">Class Name</label>
						<input type="text" name="name" id="name" class="form-control" required="required" value="{{ $kelas->name }}" placeholder="Enter Class Name">

					</div>
					<div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" required="required" placeholder="Enter description">{{ $kelas->description }}</textarea>
                    </div>
					<div class="text-right">
                        <a href="{{ route('detailKelas') }}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
				</form>
			</div>

		</div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection