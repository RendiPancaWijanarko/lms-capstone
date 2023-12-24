<?php

namespace App\Http\Controllers;


use App\Student;
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
        // Validasi input, contoh:
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            // Tambahkan validasi untuk field lain sesuai kebutuhan
        ]);
    
        // Update data di database
        auth()->user()->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Update field lain sesuai kebutuhan
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
