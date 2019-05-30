<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;			//
use Auth;

class TripController extends Controller  //
{
    public function index()
    {
    	$trips = Trip::all();           //  //
                
        return view('trip.trip', [      //  //
            'title' => 'Trip',          //
            'trips' => $trips			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/weekdays/trip');   //
        }
        return view('trip.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/weekdays/trip');     //
        }

        $data = $request->all();
        
        Trip::create($data);			  //
        
        return redirect ('/weekdays/trip');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/weekdays/trip');	  //
        }
        
        $trip = Plan::find($id);		  //  //
        
        return view('trip.edit', [		  //
            'trip' =>$trip 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/weekdays/trip');	 //
        }
        
        $data = $request->all();
        
        Trip::find($id)->update($data);	 //
        
        return redirect('/weekdays/trip');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/weekdays/trip');	 //
        }
        
        if(!empty($id)){
            Trip::find($id)->delete();   //
        }
        
        return redirect ('/weekdays/trip');		 //
    }
}
