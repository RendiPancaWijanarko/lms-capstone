@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.updateProfile') }}">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control">
                        </div>

                        <!-- Tambahkan bagian baru untuk pengeditan nomor telepon dan alamat -->
                        <div class="form-group">
                            <label for="phone_number">Nomor Telepon:</label>
                            <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $user->phone_number) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat:</label>
                            <textarea name="address" id="address" class="form-control">{{ old('address', $user->address) }}</textarea>
                        </div>

                        <!-- Tambahkan field lain sesuai kebutuhan -->

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
