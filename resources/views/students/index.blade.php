@extends('layouts.master')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h3 class="card-title mx-auto w-100">Daftar Mahasiswa</h3>
                <a href="{{ route('students.create') }}" class="btn btn-success">Tambah Baru</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama">Nama</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Telepon">Telepon</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Aksi"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary float-left"><i class="fa fa-edit"></i></a>
                                    @if($student->status == \App\Enums\StudentStatus::DISABLED)
                                        <form action="{{ route('students.update', $student->id) }}" method="POST" class="form-inline">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="{{ \App\Enums\StudentStatus::ENABLED }}">
                                            <button type="submit" class="btn btn-success float-right"><i class="fa fa-eye"></i></button>
                                        </form>
                                    @endif
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="form-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger float-right"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Nama</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">Telepon</th>
                                <th rowspan="1" colspan="1"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
