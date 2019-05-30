<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quest;
use Auth;

class QuestController extends Controller
{
    public function index()
    {
    	$quests = Quest::all();
                
        return view('quest.quest', [
            'title' => 'Quest',
            'quests' => $quests
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/quest');
        }
        return view('quest.create');
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/quest');
        }

        $data = $request->all();
        
        Calendar::create($data);
        
        return redirect ('/quest');
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/quest');
        }
        
        $quest = Quest::find($id);
        
        return view('quest.edit', [
            'quest' =>$quest
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/quest');
        }
        
        $data = $request->all();
        
        Quest::find($id)->update($data);
        
        return redirect('/quest');
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/quest');
        }
        
        if(!empty($id)){
            Quest::find($id)->delete();
        }
        
        return redirect ('/quest');
    }
}
