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
        return view('schedule.create');
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
            'class_name' => 'required|string|max:100',
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
        return view('schedule.edit', [
            'schedule' => $schedule
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
            'class_name' => 'required|string|max:100',
            'date_schedule' => 'required|date',
            'description' => 'required|string',
            'meet_link' => 'required|string',
        ])->validate();
        
        $schedule->class_name = $validateData['class_name'];
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
