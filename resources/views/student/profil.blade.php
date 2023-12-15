@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row mt-3 d-flex">
        <div class="col-md-2 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="img-fluid mb-3 border border-primary" style="border-radius: 50%;">
                    <p class="text-left"><strong>Nama:</strong><br>{{ Auth::user()->name }}</p>
                    <p class="text-left"><strong>Email:</strong><br>{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xl-9"> {{-- Mengubah col-md-6 menjadi col-md-4 dan col-xl-7 menjadi col-xl-3 --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detail</h5>
                </div>
                <div class="card-body">
                    Level
                    Rank
                    certificate
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
