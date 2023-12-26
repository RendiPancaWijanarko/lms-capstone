<?php

namespace App\Http\Controllers;

use App\learning;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $learnings = Learning::all(); // Replace this with your actual query to retrieve learning data
        return view('learning.index', compact('learnings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelass = \App\Kelas::all();
        return view('learning.create',[
            'kelass' => $kelass
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = validator($request->all(),[
            'id_kelas'=> 'required|integer',
            'learning_material' => 'required|string',
            'description' => 'required|string',
            'gdrive_link' => 'required|string',
        ])->validate();
        $learning = new Learning($validateData);
        $learning->save();
        return redirect(route('detailLearning'))->with('success', 'Data Berhasil Di simpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\learning  $learning
     * @return \Illuminate\Http\Response
     */
    public function show(learning $learning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\learning  $learning
     * @return \Illuminate\Http\Response
     */
    public function edit(learning $learning)
    {
        $kelass = \App\Kelas::all();
        return view('learning.edit',[
            'learning' => $learning,
            'kelass' => $kelass
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\learning  $learning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, learning $learning)
    {
        $validateData = validator($request->all(), [
            'id_kelas'=> 'required|integer',
            'learning_material' => 'required|string',
            'description' => 'required|string',
            'gdrive_link' => 'required|string',
        ])->validate();
        
        $learning->id_kelas = $validateData['id_kelas'];
        $learning->learning_material = $validateData['learning_material'];
        $learning->description = $validateData['description'];
        $learning->gdrive_link = $validateData['gdrive_link'];
        $learning->save();
        
        return redirect(route('detailLearning'))->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\learning  $learning
     * @return \Illuminate\Http\Response
     */
    public function destroy(learning $learning)
    {
        $learning->delete();
        return redirect(route('detailLearning'))->with('success', 'Data Berhasil Di hapus');;
    }
}
