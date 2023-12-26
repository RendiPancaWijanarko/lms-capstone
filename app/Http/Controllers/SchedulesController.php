<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();
        return view('schedule.index',[
            'schedules' => $schedules
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelass = \App\Kelas::all();
        return view('schedule.create',[
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
            'date_schedule' => 'required|date',
            'description' => 'required|string',
            'meet_link' => 'required|string',
        ])->validate();
        $schedule = new Schedule($validateData);
        $schedule->save();
        return redirect(route('detailSchedule'))->with('success', 'Data Berhasil Di simpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $kelass = \App\Kelas::all();
        return view('schedule.edit',[
            'schedule' => $schedule,
            'kelass' => $kelass
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $validateData = validator($request->all(), [
            'id_kelas'=> 'required|integer',
            'date_schedule' => 'required|date',
            'description' => 'required|string',
            'meet_link' => 'required|string',
        ])->validate();
        
        $schedule->id_kelas = $validateData['id_kelas'];
        $schedule->date_schedule = $validateData['date_schedule'];
        $schedule->description = $validateData['description'];
        $schedule->meet_link = $validateData['meet_link'];
        $schedule->save();
        
        return redirect(route('detailSchedule'))->with('success', 'Data Berhasil Diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect(route('detailSchedule'))->with('success', 'Data Berhasil Di hapus');;
    }
    
}
