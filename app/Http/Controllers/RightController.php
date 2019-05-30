<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Right;			//
use Auth;

class RightController extends Controller  //
{
    public function index()
    {
    	$rights = Right::all();           //  //
                
        return view('right.right', [      //  //
            'title' => 'Right',          //
            'rights' => $rights			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/parent/right');   //
        }
        return view('right.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/parent/right');     //
        }

        $data = $request->all();
        
        Right::create($data);			  //
        
        return redirect ('/parent/right');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/parent/right');	  //
        }
        
        $right = Right::find($id);		  //  //
        
        return view('right.edit', [		  //
            'right' =>$right 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/parent/right');	 //
        }
        
        $data = $request->all();
        
        Right::find($id)->update($data);	 //
        
        return redirect('/parent/right');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/parent/right');	 //
        }
        
        if(!empty($id)){
            Right::find($id)->delete();   //
        }
        
        return redirect ('/parent/right');		 //
    }
}
