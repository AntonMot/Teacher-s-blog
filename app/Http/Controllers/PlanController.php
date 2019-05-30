<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;			//
use Auth;

class PlanController extends Controller  //
{
    public function index()
    {
    	$plans = Plan::all();           //  //
                
        return view('plan.plan', [      //  //
            'title' => 'Plan',          //
            'plans' => $plans			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/teacher/plan');   //
        }
        return view('plan.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/teacher/plan');     //
        }

        $data = $request->all();
        
        Plan::create($data);			  //
        
        return redirect ('/teacher/plan');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/teacher/plan');	  //
        }
        
        $plan = Plan::find($id);		  //  //
        
        return view('plan.edit', [		  //
            'plan' =>$plan 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/teacher/plan');	 //
        }
        
        $data = $request->all();
        
        Plan::find($id)->update($data);	 //
        
        return redirect('/teacher/plan');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/teacher/plan');	 //
        }
        
        if(!empty($id)){
            Plan::find($id)->delete();   //
        }
        
        return redirect ('/teacher/plan');		 //
    }
}
