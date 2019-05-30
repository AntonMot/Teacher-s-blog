<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;			//
use Auth;

class EventController extends Controller  //
{
    public function index()
    {
    	$events = Event::all();           //  //
                
        return view('event.event', [      //  //
            'title' => 'Event',          //
            'events' => $events			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/teacher/event');   //
        }
        return view('event.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/teacher/event');     //
        }

        $data = $request->all();
        
        Event::create($data);			  //
        
        return redirect ('/teacher/event');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/teacher/event');	  //
        }
        
        $event = Event::find($id);		  //  //
        
        return view('event.edit', [		  //
            'event' =>$event 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/teacher/event');	 //
        }
        
        $data = $request->all();
        
        Event::find($id)->update($data);	 //
        
        return redirect('/teacher/event');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/teacher/event');	 //
        }
        
        if(!empty($id)){
            Event::find($id)->delete();   //
        }
        
        return redirect ('/teacher/event');		 //
    }
}
