<?php

namespace App\Http\Controllers;

use App\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelass = Kelas::all(); // Replace this with your actual query to retrieve learning data
        return view('kelas.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validasi data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    // Debugging: Menampilkan data sebelum menyimpan ke database
    // dd('Data after validation:', $validatedData);

    // Simpan ke database menggunakan Eloquent
    $kelas = Kelas::create([
        'name' => $validatedData['name'],
        'description' => $validatedData['description'],
    ]);

    // Debugging: Menampilkan data setelah menyimpan ke database
    // dd('Data after save:', $kelas);

    // Redirect atau memberikan respons sesuai kebutuhan aplikasi
    return redirect(route('detailKelas'))->with('success', 'Data Berhasil Disimpan');
}
    

    /**
     * Display the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kelas)
    {
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelas $kelas)
    {
        $validateData = validator($request->all(),[
            'name'=>'required|string|max:255',
            'description'=>'required|string',
        ])->validate();

        $kelas->name = $validateData['name'];
        $kelas->description =$validateData['description'];
        $kelas->save();

        return redirect(route('detailKelas'))->with('success', 'Data Berhasil Di update');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kelas)
    {
        $kelas->delete();
        return redirect(route('detailKelas'))->with('success', 'Data Berhasil Di hapus');;
    }
}
