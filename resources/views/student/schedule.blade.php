@extends('layouts.master')

@section('content')

    <!-- Main content -->
    <div class="content" style="padding-left: 360px; margin-right: 50px; margin-top: 20px;">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Jadwal Pelajaran</h2>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered mb-0" id="data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kelas</th>
                                    <th>Tanggal</th>
                                    <th>Deskripsi Jadwal</th>
                                    <th>Link Meet</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($schedules as $schedule)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $schedule->class_name }}</td>
                                        <td>{{ $schedule->date_schedule }}</td>
                                        <td>{{ $schedule->description }}</td>
                                        <td><a href="{{ $schedule->meet_link }}" target="_blank" class="btn btn-sm btn-success">Gabung Kelas</a></td>
                                        <td>
                                            <a href="{{ route('editSchedule', ['schedule'=> $schedule->id]) }}" class="btn btn-warning btn-sm" role="button">Update</a>
                                            <a onclick="confirmDelete(this)" data-url="{{ route('deleteSchedule', ['schedule'=> $schedule->id]) }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada jadwal pelajaran.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
