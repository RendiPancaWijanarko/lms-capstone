@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('student.updateProfile') }}">
                        @csrf
                        @method('put')

                        <!-- Tambahkan bagian validasi dan pesan kesalahan jika diperlukan -->

                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Nomor Telepon:</label>
                            <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $user->phone_number) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat:</label>
                            <textarea name="address" id="address" class="form-control">{{ old('address', $user->address) }}</textarea>
                        </div>

                        <!-- Tambahkan field lain sesuai kebutuhan -->

                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

                            <!-- Tautan kembali ke halaman profil -->
                            <a href="{{ route('profile.show') }}" class="btn btn-danger">Kembali ke Profil</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection