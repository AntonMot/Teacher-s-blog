<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Olympprav;			//
use Auth;

class OlymppravController extends Controller  //
{
    public function index()
    {
    	$olymppravs = Olympprav::all();           //  //
                
        return view('olympprav.olympprav', [      //  //
            'title' => 'Olympprav',          //
            'olymppravs' => $olymppravs			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/pupil/olympprav');   //
        }
        return view('olympprav.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/pupil/olympprav');     //
        }

        $data = $request->all();
        
        Olympprav::create($data);			  //
        
        return redirect ('/pupil/olympprav');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/pupil/olympprav');	  //
        }
        
        $olympprav = Olympprav::find($id);		  //  //
        
        return view('olympprav.edit', [		  //
            'olympprav' =>$olympprav 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/pupil/olympprav');	 //
        }
        
        $data = $request->all();
        
        Olympprav::find($id)->update($data);	 //
        
        return redirect('/pupil/olympprav');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/pupil/olympprav');	 //
        }
        
        if(!empty($id)){
            Olympprav::find($id)->delete();   //
        }
        
        return redirect ('/pupil/olympprav');		 //
    }
}
