<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Life;			//
use Auth;

class LifeController extends Controller  //
{
    public function index()
    {
    	$lifes = Life::all();           //  //
                
        return view('life.life', [      //  //
            'title' => 'Life',          //
            'lifes' => $lifes			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/weekdays/life');   //
        }
        return view('life.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/weekdays/life');     //
        }

        $data = $request->all();
        
        Life::create($data);			  //
        
        return redirect ('/weekdays/life');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/weekdays/life');	  //
        }
        
        $life = Life::find($id);		  //  //
        
        return view('life.edit', [		  //
            'life' =>$life 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/weekdays/life');	 //
        }
        
        $data = $request->all();
        
        Life::find($id)->update($data);	 //
        
        return redirect('/weekdays/life');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/weekdays/life');	 //
        }
        
        if(!empty($id)){
            Life::find($id)->delete();   //
        }
        
        return redirect ('/weekdays/life');		 //
    }
}
