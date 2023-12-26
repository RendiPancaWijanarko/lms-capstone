@extends('layouts.master')

@section('content')
<div class="container">
    @can('view_admin')
        <div class="row">
            {{-- Main Content --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Administrator, ') }} {{ auth()->user()->name }}
                    </div>
                    {{-- Isi Profil --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 text-sm-center mb-2">
                                <img src="{{ Auth::user()->avatar }}" alt="Avatar"
                                    class="img-fluid border border-success elevation-2"
                                    style="border-radius: 50%; width: 150px; height: 150px; margin: 0 auto;">
                            </div>
                            <div class="col-sm-9">
                                @php
                                    // Set the timezone to Jakarta (WIB)
                                    date_default_timezone_set('Asia/Jakarta');

                                    // Menentukan waktu saat ini
                                    $waktu = date('H');

                                    // Pesan selamat pagi, siang, sore, atau malam berdasarkan waktu
                                    if ($waktu < 12) {
                                        $pesan = 'Selamat Pagi';
                                    } elseif ($waktu < 15) {
                                        $pesan = 'Selamat Siang';
                                    } elseif ($waktu < 18) {
                                        $pesan = 'Selamat Sore';
                                    } else {
                                        $pesan = 'Selamat Malam';
                                    }
                                @endphp

                                <h3 class="text-success">{{ $pesan }}, <span
                                        id="username">{{ Auth::user()->name }}</span></h3>
                                        <h6>Selamat datang, Admin. Semoga tugas administratifmu berjalan lancar hari ini. <br>Terima kasih atas dedikasimu untuk menjaga kelancaran sistem!</h6>

                                <a href="{{ route('profile.show') }}" class="btn btn-sm btn-outline-success mt-4">Lihat
                                    Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Main Content --}}
            </div>
        </div>

        <div class="row">

            <!-- Schedule Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card mb-4 text-center">
                    <div class="card-body">
                        <h1><i class="fas fa-calendar-alt" style="color: #28a745;"></i></h1>
                        <h5> Schedule </h5>
                    </div>
                    <div class="card-footer mb-0 bg-success">
                        <a href="{{ route('detailSchedule') }}" class="text-decoration-none">
                            Akses Jadwal disini
                            <span class="ml-2 d-inline-block">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Class Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card mb-4 text-center">
                    <div class="card-body">
                        <h1><i class="fas fa-book" style="color: #28a745;"></i></h1>
                        <h5> Courses </h5>
                    </div>
                    <div class="card-footer mb-0 bg-success">
                        <a href="{{ route('courses.index') }}" class="text-decoration-none">
                            View Courses Here
                            <span class="ml-2 d-inline-block">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Grades Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card mb-4 text-center">
                    <div class="card-body">
                        <h1><i class="fas fa-graduation-cap" style="color: #28a745;"></i></h1>
                        <h5> Nilai </h5>
                    </div>
                    <div class="card-footer mb-0 bg-success">
                        <a href="{{ route('student.grade') }}" class="text-decoration-none">
                            Akses Nilai disini
                            <span class="ml-2 d-inline-block">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Attendance Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card mb-4 text-center">
                    <div class="card-body">
                        <h1><i class="fas fa-check-circle" style="color: #28a745;"></i></h1>
                        <h5> Absensi </h5>
                    </div>
                    <div class="card-footer mb-0 bg-success">
                        <a href="{{ route('student.attendance') }}" class="text-decoration-none">
                            Akses Absensi disini
                            <span class="ml-2 d-inline-block">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    @endcan

    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4">
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info-active">
                        <h3 class="widget-user-username">{{ $course->name }}</h3>
                        <h5 class="widget-user-desc">{{ $course->teacher->name }}</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="{{ $course->teacher->avatar }}" alt="User Avatar">
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">{{ $course->students()->count() }}</h5>
                                    <span class="description-text">STUDENTS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <a href="{{route('courses.show', $course->id)}}" class="btn"><i class="icon far fa-2x fa-eye text-green"></i></a>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">{{ $course->lessons->count() }}</h5>
                                    <span class="description-text">LESSONS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
        @endforeach
    </div>
</div>
@endsection
