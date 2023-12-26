<?php

namespace App\Http\Controllers;


use App\Student;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.dashboard');
    }

    public function course()
    {
        return view('student.course');
    }
    
    public function showProfile()
    {
        $user = auth()->user();

        // Data untuk ditampilkan di profil
        $userLevel = $user->level? $user->level->count():0; 
        $userRank = $user->rank ? $user->rank->count() : 0 ;
        $certificateCount = $user->certificates ? $user->certificates->count() : 0;

        // Kirim data ke tampilan Blade
        return view('student.profile', compact('userLevel', 'userRank', 'certificateCount'));

    
    }
    public function edit()
    {
        $user = Auth::user();
        return view('student.edit', compact('user'));


    }
    

    public function updateProfile(Request $request)
{
    // Validasi input disini jika diperlukan

    // Simpan perubahan pada model pengguna
    auth()->user()->update([
        'name' => $request->input('name'),
        'phone_number' => $request->input('phone_number'),
        'address' => $request->input('address'),
        // Tambahkan field lain sesuai kebutuhan
    ]);

    // Tambahkan pesan flash
    session()->flash('success', 'Profil berhasil diperbarui.');

    // Arahkan kembali ke halaman profil
    return redirect()->route('profile.show');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSchedule()
    {
    // Ambil data jadwal pelajaran untuk siswa dari database
    $schedules = Schedule::all(); // Sesuaikan dengan model dan relasi Anda

    // Kirim data ke tampilan Blade
    return view('student.schedule', compact('schedules'));
    }
    
    public function create()
    {
        //
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
