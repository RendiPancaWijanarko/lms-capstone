<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        // Logika untuk tampilan pembuatan mahasiswa
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:students|max:255',
            'phone' => 'nullable|string',
        ]);

        // Simpan data ke dalam database
        Student::create($validatedData);

        // Redirect ke halaman index
        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:students,email,' . $id,
            'phone' => 'nullable|string',
        ]);

        // Update data di dalam database
        $student->update($validatedData);

        // Redirect ke halaman index
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        // Hapus mahasiswa dari database
        $student->delete();

        // Redirect ke halaman index
        return redirect()->route('students.index');
    }
}
