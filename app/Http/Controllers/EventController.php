<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index',compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show',compact('events'));
    } 

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'required|max:255'
        ]);
        Event::create($validatedData);
        return redirect()->route('events.index')->with('success','Evenimentul a fost creat cu succews!');
        
    }
}
