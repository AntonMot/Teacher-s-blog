<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zno;			//
use Auth;

class ZnoController extends Controller  //
{
    public function index()
    {
    	$znos = Zno::all();           //  //
                
        return view('zno.zno', [      //  //
            'title' => 'Zno',          //
            'znos' => $znos			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/pupil/zno');   //
        }
        return view('zno.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/pupil/zno');     //
        }

        $data = $request->all();
        
        Zno::create($data);			  //
        
        return redirect ('/pupil/zno');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/pupil/zno');	  //
        }
        
        $zno = Zno::find($id);		  //  //
        
        return view('zno.edit', [		  //
            'zno' =>$zno 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/pupil/zno');	 //
        }
        
        $data = $request->all();
        
        Zno::find($id)->update($data);	 //
        
        return redirect('/pupil/zno');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/pupil/zno');	 //
        }
        
        if(!empty($id)){
            Zno::find($id)->delete();   //
        }
        
        return redirect ('/pupil/zno');		 //
    }
}
