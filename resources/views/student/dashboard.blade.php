@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">

            {{-- Main Content --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Welcome') }} {{ auth()->user()->name }}
                    </div>
                    {{-- Isi Profil --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 text-center text-sm-left mb-3">
                                <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="img-fluid border border-primary"
                                    style="border-radius: 50%; width: 150px; height: 150px; margin: 0 auto;">
                            </div>
                            <div class="col-sm-8">
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
                                        id="username">{{ Auth::user()->name }}</span>!</h3>
                                <h6>Selamat belajar {{ Auth::user()->name }}, semoga harimu menyenangkan. <br>Jangan lupa
                                    kerjakan tugas ya jika belum!</h6>

                                <a href="{{ route('student.profil') }}" class="btn btn-sm btn-outline-success mt-3">Lihat
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
                        <!-- Add your schedule content here -->
                    </div>
                    <div class="card-footer mb-0 bg-success">
                        <a href="" class="text-decoration-none">
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
                        <h5> Kelas </h5>
                        <!-- Add your schedule content here -->
                    </div>
                    <div class="card-footer mb-0 bg-success">
                        <a href="" class="text-decoration-none">
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
                        <h1><i class="fas fa-graduation-cap" style="color: #28a745;"></i></h1>
                        <h5> Nilai </h5>
                        <!-- Add your schedule content here -->
                    </div>
                    <div class="card-footer mb-0 bg-success">
                        <a href="" class="text-decoration-none">
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
                        <!-- Add your schedule content here -->
                    </div>
                    <div class="card-footer mb-0 bg-success">
                        <a href="" class="text-decoration-none">
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Chat Diskusi
                    </div>
                    <div class="card-body">
                        {{-- Isi Chat Diskusi --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
