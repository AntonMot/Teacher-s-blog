<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;			//
use Auth;

class MarkController extends Controller  //
{
    public function index()
    {
    	$marks = Mark::all();           //  //
                
        return view('mark.mark', [      //  //
            'title' => 'Mark',          //
            'marks' => $marks			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/parent/mark');   //
        }
        return view('mark.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/parent/mark');     //
        }

        $data = $request->all();
        
        Mark::create($data);			  //
        
        return redirect ('/parent/mark');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/parent/mark');	  //
        }
        
        $mark = Mark::find($id);		  //  //
        
        return view('mark.edit', [		  //
            'mark' =>$mark 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/parent/mark');	 //
        }
        
        $data = $request->all();
        
        Mark::find($id)->update($data);	 //
        
        return redirect('/parent/mark');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/parent/mark');	 //
        }
        
        if(!empty($id)){
            Mark::find($id)->delete();   //
        }
        
        return redirect ('/parent/mark');		 //
    }
}
