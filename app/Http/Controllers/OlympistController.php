<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Olympist;			//
use Auth;

class OlympistController extends Controller  //
{
    public function index()
    {
    	$olympists = Olympist::all();           //  //
                
        return view('olympist.olympist', [      //  //
            'title' => 'Olympist',          //
            'olympists' => $olympists			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/pupil/olympist');   //
        }
        return view('olympist.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/pupil/olympist');     //
        }

        $data = $request->all();
        
        Olympist::create($data);			  //
        
        return redirect ('/pupil/olympist');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/pupil/olympist');	  //
        }
        
        $olympist = Olympist::find($id);		  //  //
        
        return view('olympist.edit', [		  //
            'olympist' =>$olympist 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/pupil/olympist');	 //
        }
        
        $data = $request->all();
        
        Olympist::find($id)->update($data);	 //
        
        return redirect('/pupil/olympist');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/pupil/olympist');	 //
        }
        
        if(!empty($id)){
            Olympist::find($id)->delete();   //
        }
        
        return redirect ('/pupil/olympist');		 //
    }
}
