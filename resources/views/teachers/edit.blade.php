@extends('layouts.master')

@section('content')
    <div class="container">
        {{ Breadcrumbs::render('teachers.index') }}
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updateTeacher', ['teacher' => $teacher->id]) }}" method="POST">
                    @csrf
                    {{-- Form Input untuk Edit Data Guru --}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $teacher->name }}" placeholder="Masukkan nama guru" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $teacher->email }}" placeholder="Masukkan email guru" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ $teacher->phone }}" placeholder="Masukkan nomor telepon" required>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id" id="category_id" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $teacher->category_id ? 'selected' : '' }}>
                                    {{ $category->course_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Tombol untuk menyimpan perubahan --}}
                    <div class="text-right">
                        <a href="{{ route('teachers.index') }}" class="btn btn-outline-danger mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary" onclick="confirmUpdate()">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

