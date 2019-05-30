<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Law;
use Auth;

class LawController extends Controller
{
    public function index()
    {
    	$laws = Law::all();
                
        return view('law.law', [
            'title' => 'Law',
            'laws' => $laws
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/law');
        }
        return view('law.create');
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/law');
        }

        $data = $request->all();
        
        Law::create($data);
        
        return redirect ('/law');
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/law');
        }
        
        $law = Law::find($id);
        
        return view('law.edit', [
            'law' =>$law
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/law');
        }
        
        $data = $request->all();
        
        Law::find($id)->update($data);
        
        return redirect('/law');
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/law');
        }
        
        if(!empty($id)){
            Law::find($id)->delete();
        }
        
        return redirect ('/law');
    }
}
