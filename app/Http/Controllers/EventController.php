<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

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
        return view('Events/list',[
            'list'=>$events,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Events/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $events = new Event();
        /*$events->eventName = $request->get('eventName');
        $events->bandNames = $request->get('bandNames');
        $events->startDate = $request->get('startDate');
        $events->endDate = $request->get('endDate');
        $events->portfolio = $request->get('portfolio');
        $events->ticketPrice = $request->get('ticketPrice');
        $events->status = $request->get('status');*/
        $events->fill($request->all());
        $events->save();
        return redirect('Events/list');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request, $id)
    {
        $detailEvent = Event::find($id);
        /*$detailEvent->eventName = $request->get('eventName');
        $detailEvent->bandNames = $request->get('bandNames');
        $detailEvent->startDate = $request->get('startDate');
        $detailEvent->endDate = $request->get('endDate');
        $detailEvent->portfolio = $request->get('portfolio');
        $detailEvent->ticketPrice = $request->get('ticketPrice');
        $detailEvent->status = $request->get('status');*/
        $detailEvent->update($request->all());
        $detailEvent->save();
        return "Edit success";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $currentEvent = Event::find($id);
        return view('events/edit',[
            'current' => $currentEvent
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $detailEvent = Event::find($id);
        $detailEvent->delete();
        return redirect('Events/list');
    }
}
