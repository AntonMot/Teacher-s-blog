<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;			//
use Auth;

class MissionController extends Controller  //
{
    public function index()
    {
    	$missions = Mission::all();           //  //
                
        return view('mission.mission', [      //  //
            'title' => 'Mission',          //
            'missions' => $missions			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/weekdays/mission');   //
        }
        return view('mission.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/weekdays/mission');     //
        }

        $data = $request->all();
        
        Mission::create($data);			  //
        
        return redirect ('/weekdays/mission');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/weekdays/mission');	  //
        }
        
        $mission = Mission::find($id);		  //  //
        
        return view('mission.edit', [		  //
            'mission' =>$mission 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/weekdays/mission');	 //
        }
        
        $data = $request->all();
        
        Mission::find($id)->update($data);	 //
        
        return redirect('/weekdays/mission');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/weekdays/mission');	 //
        }
        
        if(!empty($id)){
            Mission::find($id)->delete();   //
        }
        
        return redirect ('/weekdays/mission');		 //
    }
}
