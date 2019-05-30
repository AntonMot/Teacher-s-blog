<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;			//
use Auth;

class DealController extends Controller  //
{
    public function index()
    {
    	$deals = Deal::all();           //  //
                
        return view('deal.deal', [      //  //
            'title' => 'Deal',          //
            'deals' => $deals			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/weekdays/deal');   //
        }
        return view('deal.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/weekdays/deal');     //
        }

        $data = $request->all();
        
        Deal::create($data);			  //
        
        return redirect ('/weekdays/deal');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/weekdays/deal');	  //
        }
        
        $deal = Deal::find($id);		  //  //
        
        return view('deal.edit', [		  //
            'deal' =>$deal 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/weekdays/deal');	 //
        }
        
        $data = $request->all();
        
        Deal::find($id)->update($data);	 //
        
        return redirect('/weekdays/deal');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/weekdays/deal');	 //
        }
        
        if(!empty($id)){
            Deal::find($id)->delete();   //
        }
        
        return redirect ('/weekdays/deal');		 //
    }
}
