<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $events = Event::all();
        return view('events.index',['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_title'=>'required',
            'event_desp'=>'required',
            'event_start'=>'required',
            'event_end'=>'required'
        ]);
        $event = new Event([
            'title'=>request('event_title'),
            'description'=>request('event_desp'),
            'start_date'=>request('event_start'),
            'end_date'=>request('event_end')
        ]);
        $event->save();
        return redirect('/events')->with('success','Events has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=Event::find($id);
       return view('user.details',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'event_title'=>'required',
            'event_desp'=>'required',
            'event_start'=>'required',
            'event_end'=>'required'
        ]);
        $event = Event::find($id);
        $event->title=$request->get('event_title');
        $event->description=$request->get('event_desp');
        $event->start_date=$request->get('event_start');
        $event->end_date=$request->get('event_end');
        $event->save();

        return redirect('/events')->with('success', 'Event has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('/events')->with('success', 'Event has been deleted Successfully!');
    }
}
