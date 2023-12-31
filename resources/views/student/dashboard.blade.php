@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            {{-- Main Content --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Welcome, ') }} {{ auth()->user()->name }}
                    </div>
                    {{-- Isi Profil --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 text-sm-center mb-2">
                                <img src="{{ Auth::user()->avatar }}" alt="Avatar"
                                    class="img-fluid border border-secondary elevation-2"
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

                                <h3 class="text-secondary" style="-webkit-text-fill-color: #ff9900">{{ $pesan }}, <span
                                        id="username">{{ Auth::user()->name }}</span></h3>
                                <h6>Selamat belajar, semoga harimu menyenangkan jaga kesahatan selalu. <br>Tetap semangat dan jangan menyerah !</h6>

                                <a href="{{ route('profile.show') }}" class="btn btn-sm btn-outline-secondary mt-4">Lihat
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
                        <h1><i class="fas fa-calendar-alt" style="color: #ff9900;"></i></h1>
                        <h5> Schedule </h5>
                    </div>
                    <div class="card-footer mb-0 bg-secondary">
                        <a href="{{ route('student.schedule') }}" class="text-decoration-none">
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
                        <h1><i class="fas fa-book" style="color: #ff9900;"></i></h1>
                        <h5> Kelas </h5>
                    </div>
                    <div class="card-footer mb-0 bg-secondary">
                        <a href="{{ route('student.course') }}" class="text-decoration-none">
                            Akses Kelas disini
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
                        <h1><i class="fas fa-graduation-cap" style="color: #ff9900;"></i></h1>
                        <h5> Nilai </h5>
                    </div>
                    <div class="card-footer mb-0 bg-secondary">
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
                        <h1><i class="fas fa-check-circle" style="color: #ff9900;"></i></h1>
                        <h5> Absensi </h5>
                    </div>
                    <div class="card-footer mb-0 bg-secondary">
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
        <!-- End Grid of Cards -->

        {{-- Chat Diskusi --}}
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Chat Diskusi
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
@endsection
