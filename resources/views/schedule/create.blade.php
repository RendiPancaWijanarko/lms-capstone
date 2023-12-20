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
                <form action="{{ route('storeSchedule') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="class_name">Class Name</label>
                        <input type="text" name="class_name" id="class_name" class="form-control" required="required" placeholder="Enter class name">
                    </div>
                    <div class="form-group">
                        <label for="date_schedule">Date</label>
                        <input type="date" name="date_schedule" id="date_schedule" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="description">Schedule Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" required="required" placeholder="Enter schedule description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="meet_link">Meet Link</label>
                        <input type="text" name="meet_link" id="meet_link" class="form-control" required="required" placeholder="Enter Meet link">
                    </div>
                    <div class="text-right">
                        <a href="{{ route('detailSchedule') }}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection