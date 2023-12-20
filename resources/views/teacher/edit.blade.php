@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12">
				<h1 class="m-0 text-dark">Create Schedules</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Create</li>
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
            <form action="{{ route('updateTeacher', ['teacher' => $teacher->id]) }}" method="post">
                    @csrf
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="name" class="form-label"><strong>Name:</strong></label>
                                <input type="text" name="name" id="name" class="form-control" required="required" value="{{ $teacher->nama }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="description" class="form-label"><strong>Description:</strong></label>
                                <textarea name="description" id="description" class="form-control" required="required" rows="3">{{ $teacher->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="email" class="form-label"><strong>Email:</strong></label>
                                <input type="text" name="email" id="email" class="form-control" value="{{ $teacher->email }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="phone" class="form-label"><strong>Phone:</strong></label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $teacher->phone }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="category" class="form-label"><strong>Category:</strong></label>
                                <input type="text" name="category" id="category" class="form-control" value="{{ $teacher->category }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="category" class="form-label"><strong>Description:</strong></label>
                                <textarea style="width: 100%; border: 2px solid #000; padding: 10px; margin-bottom: 10px;">{{ $teacher->deskripsi }}</textarea>
                            </div>
                        </div>
                    <div class="text-right">
                    <a href="{{ route('detailTeacher') }}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
@endsection
