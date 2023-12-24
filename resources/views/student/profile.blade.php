@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row mt-3">
        <!-- Profile Section -->
        <div class="col-md-4 col-xl-3">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title mb-0">Profil</h5>
                </div>
                <div class="card-body text-center">
                    <!--foto-->
                    <div class="profile-picture">
                        <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="img-fluid border border-primary rounded-circle" style="width: 150px; height: 150px;">
                    </div>
                    <!--email-->
                    <div class="user-details text-left mt-3">
                        <p class="text-left">
                            <i class="fas fa-envelope mr-2"></i> <strong>Email:</strong><br>{{ Auth::user()->email }}
                        </p>
                        <!--nama-->
                        <p class="text-left">
                            <i class="fas fa-user mr-2"></i> <strong>Nama:</strong><br>{{ Auth::user()->name }}
                        </p>
                        <!--no.tlp-->
                        <p class="text-left">
                            <i class="fas fa-phone mr-2"></i> <strong>Telepon:</strong><br>{{ Auth::user()->phone_number ?? 'Belum diisi' }}
                        </p>
                        <!--alamat-->
                        <p class="text-left">
                            <i class="fas fa-map-marker-alt mr-2"></i> <strong>Alamat:</strong><br>{{ Auth::user()->address ?? 'Belum diisi' }}
                        </p>
                        <a href="{{ route('profile.edit') }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Section -->
        <div class="col-md-8 col-xl-9">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="card-title mb-0">Detail</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Level</strong></h5>
                                <p class="card-text">{{ $userLevel }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Rank</strong></h5>
                                <p class="card-text">{{ $userRank }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Certificate</strong></h5>
                                <p class="card-text">{{ $certificateCount }}</p>
                            </div>
                        </div>
                    </div>
                     <!-- Tombol Kembali ke Dashboard -->
                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            <a href="{{ url('/student') }}" class="btn btn-primary">Kembali ke Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
