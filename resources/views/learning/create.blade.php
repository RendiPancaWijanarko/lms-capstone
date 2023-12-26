@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12">
				<h1 class="m-0 text-dark">Create Learning</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Learning Material</li>
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
                <form action="{{ route('storeLearning') }}" method="post">
                    @csrf
                    <div class="form-group">
						<label for="class_name">Class Name</label>
						<select class="form-control" name="id_kelas" id="id_kelas" required="required">
                        @foreach ($kelass as $kelas)
							<option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
							@endforeach

						</select>
					</div>
                    <div class="form-group">
                        <label for="learning_material">Learning Material</label>
                        <input type="text" name="learning_material" class="form-control" required placeholder="Enter learning material">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" required="required" placeholder="Enter class description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gdrive_link">Google Drive Link</label>
                        <input type="url" name="gdrive_link" id="gdrive_link" class="form-control" required="required" placeholder="Enter Google Drive link">
                    </div>
                    <div class="text-right">
                        <a href="{{ route('detailLearning') }}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection