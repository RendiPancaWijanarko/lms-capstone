@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            {{-- Main Content --}}
            <div class="col-md-8">
                <div class="card-header">{{ __('Welcome') }} {{ auth()->user()->name }}
                </div>
                {{-- Isi Profil --}}
                <div class="card-body">
                    <div class="col-sm-2 text-center text-sm-left">
                        <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="img-fluid mb-3 border border-primary"
                            style="border-radius: 50%;">
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


                        <h3 class="text-primary">{{ $pesan }}, <span id="username">{{ Auth::user()->name }}</span>!
                        </h3>
                        <h6>Selamat belajar {{ Auth::user()->name }}, semoga harimu menyenangkan. <br>Jangan lupa kerjakan
                            tugas ya jika belum!</h6>

                        <a href="#" class="btn btn-sm btn-outline-primary" style="margin-top: 8%">Lihat Profil</a>
                    </div>
                </div>
            </div>


            {{-- Pencapaian --}}
            <div class="col-md-4">
                <div class="card-header text-center">
                    Pencapaian
                </div>
                <div class="card-body">
                    {{-- Isi Pencapaian --}}
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar">
                                            <img src="{{ asset('/icon/file-edit.png') }}" alt="icon">
                                        </div>
                                    </div>
                                    <span>Materi Yang Diambil</span>
                                    <h3 class="card-title mb-1">10 Materi</h3>
                                    <small class="text-success font-weight-medium"><i class="bx bx-up-arrow-alt"></i>
                                        85%</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar">
                                            <img src="{{ asset('/icon/book-bookmark.png') }}" alt="icon">
                                        </div>
                                    </div>
                                    <span>Kelas yang Diambil</span>
                                    <h3 class="card-title text-nowrap mb-1">3 Kelas</h3>
                                    <small class="text-success font-weight-medium"><i class="bx bx-up-arrow-alt"></i>
                                        85%</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar">
                                            <img src="{{ asset('/icon/book-bookmark.png') }}" alt="icon">
                                        </div>
                                    </div>
                                    <span>Kelas yang Diambil</span>
                                    <h3 class="card-title text-nowrap mb-1">3 Kelas</h3>
                                    <small class="text-success font-weight-medium"><i class="bx bx-up-arrow-alt"></i>
                                        85%</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar">
                                            <img src="{{ asset('/icon/book-bookmark.png') }}" alt="icon">
                                        </div>
                                    </div>
                                    <span>Kelas yang Diambil</span>
                                    <h3 class="card-title text-nowrap mb-1">3 Kelas</h3>
                                    <small class="text-success font-weight-medium"><i class="bx bx-up-arrow-alt"></i>
                                        85%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            {{-- Akses Materi --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Akses Materi
                    </div>
                    <div class="card-body">
                        {{-- Isi Akses Materi --}}
                    </div>
                </div>
            </div>

            {{-- Akses Proyek --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Akses Proyek
                    </div>
                    <div class="card-body">
                        {{-- Isi Akses Proyek --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            {{-- Akses Sertifikat --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Akses Absensi
                    </div>
                    <div class="card-body">
                        {{-- Isi Akses Sertifikat --}}
                    </div>
                </div>
            </div>

            {{-- Akses Graduation --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Akses Sertifikat
                    </div>
                    <div class="card-body">
                        {{-- Isi Akses Graduation --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            {{-- Chat Diskusi --}}
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

        {{-- untuk di profil nanti --}}
        <div class="row mt-3">
            <div class="col-md-4 col-xl-3">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-tittle mb-0">profile</h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="img-fluid mb-3 border border-primary"
                            style="border-radius: 50%;">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-tittle mb-0">Detail</h5>
                    </div>
                    <div class="card-body h-100"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
