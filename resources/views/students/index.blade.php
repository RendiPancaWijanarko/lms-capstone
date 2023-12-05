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
        {{ Breadcrumbs::render('students.index') }}
        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-bordered" id="data-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->username }}</td>
                                <td>{{ $student->email }}</td>
                                <td>
                                    {{-- Actions, seperti tombol Edit atau Remove --}}
                                    {{-- <a href="{{ route('editStudent', ['student' => $student->id]) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a onclick="confirmDelete(this)" data-url="{{ route('deleteStudent', ['student' => $student->id]) }}" class="btn btn-danger btn-sm" role="button">Remove</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

