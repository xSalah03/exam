<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function allEvents(Event $events)
    {
        $events = Event::all();
        return view('pages.events.list-events', compact('events'));
    }

    public function createEventPage()
    {
        return view('pages.events.create-event');
    }

    public function createEvent(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4',
            'description' => 'required|min:4',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'price' => 'required|integer'
        ]);
        $eve = new Event();
        $eve->title = $request->title;
        $eve->description = $request->description;
        $eve->start_date = $request->start_date;
        $eve->end_date = $request->end_date;
        $eve->price = $request->price;
        $eve->save();
        flashy()->success('Event created successfully!');
        return redirect()->route('allEvents');
    }

    public function updateEventPage($eventId)
    {
        $event = Event::findOrFail($eventId);
        return view('pages.events.update-event', compact('event'));
    }

    public function updateEvent(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|min:4',
            'description' => 'required|min:4',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'price' => 'required|integer'
        ]);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->price = $request->price;
        $event->save();
        flashy()->success('Event updated successfully!');
        return redirect()->route('allEvents');
    }

    public function deleteEvent(Event $event)
    {
        $event->delete();
        flashy()->success('Event deleted successfully!');
        return redirect()->route('allEvents');
    }
}
