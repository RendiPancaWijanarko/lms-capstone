@extends('layouts.master')

@section('content')
    <div class="container">
        {{ Breadcrumbs::render('students.index') }}
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updateStudent', ['student' => $student->id]) }}" method="POST">
                    @csrf
                    {{-- Form Input untuk Edit Data Guru --}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" placeholder="Input student' name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $student->email }}" placeholder="Input student' email address" required>
                    </div>

                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" name="username" id="username" class="form-control" value="{{ $student->username }}" placeholder="Input student' username" required>
                    </div>

                    {{-- Tombol untuk menyimpan perubahan --}}
                    <div class="text-right">
                        <a href="{{ route('students.index') }}" class="btn btn-outline-danger mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary" onclick="confirmUpdate()">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

