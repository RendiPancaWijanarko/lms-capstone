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
            <div class="card-header text-right">
                <a href="{{ route('createTeacher') }}" class="btn btn-primary" role="button">Add New Teacher</a>
            </div>

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
                                <td>{{ $teacher->category_id }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" role="button" onclick="deleteTeacher('{{ $teacher->id }}')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

