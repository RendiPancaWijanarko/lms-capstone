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

    <div class="row mt-4">
        <div class="col-md-8">
            <h3>Popular courses</h3>
            <ul class="list-group">
                @if($topCourses->isNotEmpty())
                    @foreach ($topCourses as $course)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $course->name }}
                            <span class="badge bg-gradient-blue badge-pill">{{ $course->enrollments }}</span>
                        </li>
                    @endforeach
                @else
                    <li class="list-group-item">No courses available.</li>
                @endif
            </ul>
        </div>

        <div class="col-md-4">
            <h3>Reports</h3>
            <div class="chart-container">
                <canvas id="reportsChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
