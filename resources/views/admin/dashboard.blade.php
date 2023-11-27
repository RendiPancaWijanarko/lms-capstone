@extends('layouts.master')

@section('content')
<div class="container">
    {{ Breadcrumbs::render('admin.dashboard') }}
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total Teachers</h5>
                    <h3 class="card-text">{{ $totalTeachers }}</h3>
                    <a href="{{ route('teachers.index') }}" class="btn bg-gradient-blue">Lihat Rincian</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <i class="fas fa-users fa-3x"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total Students</h5>
                    <h3 class="card-text">{{ $totalStudents }}</h3>
                    <a href="{{ route('students.index') }}" class="btn bg-gradient-blue">Lihat Rincian</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <i class="fas fa-chalkboard fa-3x"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total Courses</h5>
                    <h3 class="card-text">{{ $totalCourses }}</h3>
                    <a href="{{ route('courses.index') }}" class="btn bg-gradient-blue">Lihat Rincian</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
