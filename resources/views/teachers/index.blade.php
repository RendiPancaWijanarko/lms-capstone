@extends('layouts.master')

@section('addJavascript')
{{-- START | INISIALISASI DATATABLES --}}
    <script>
        $(function() {
            $('#data-table').DataTable();
        });
    </script>
{{-- END | INISIALISASI DATATABLES --}}
@endsection


@section('content')
    <div class="container">
        {{ Breadcrumbs::render('teachers.index') }}
        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-bordered" id="data-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->phone }}</td>
                                <td>{{ $teacher->category->course_name }}</td>
                                <td>
                                    <a href="{{ route('editTeacher', ['teacher' => $teacher->id]) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                    {{-- <a onclick="confirmDelete(this)" data-url="{{ route('deleteMapel', ['mapel' => $mataPelajaran->id]) }}" class="btn btn-danger btn-sm" role="button">Hapus</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

