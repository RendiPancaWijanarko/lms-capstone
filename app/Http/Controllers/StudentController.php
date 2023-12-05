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
            'username' => 'required|max:255',
            'email' => 'required|email|unique:students|max:255',
        ]);

        // Simpan data ke dalam database
        Student::create($validatedData);

        // Redirect ke halaman index
        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }

    public function update(Request $request, Student $student)
    {
        // Validasi data formulir jika diperlukan
        $validatedData = validator($request->all(), [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|unique:students,email,'.$student->id.',id|max:255',
        ])->validate();

        $student->name = $validatedData['name'];
        $student->username = $validatedData['username'];
        $student->email = $validatedData['email'];
        $student->save();

        return redirect(route('students.index'))
            ->with('success', 'Student updated successfully!');
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
