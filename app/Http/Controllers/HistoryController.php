<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Auth;

class HistoryController extends Controller
{
    public function index()
    {
    	$histories = History::all();
                
        return view('history.history', [
            'title' => 'History',
            'histories' => $histories
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/history');
        }
        return view('history.create');
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/history');
        }

        $data = $request->all();
        
        History::create($data);
        
        return redirect ('/history');
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/history');
        }
        
        $history = History::find($id);
        
        return view('history.edit', [
            'history' =>$history
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/history');
        }
        
        $data = $request->all();
        
        History::find($id)->update($data);
        
        return redirect('/history');
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/history');
        }
        
        if(!empty($id)){
            History::find($id)->delete();
        }
        
        return redirect ('/history');
    }
}
