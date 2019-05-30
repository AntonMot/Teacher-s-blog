<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Auth;

class AboutController extends Controller
{
    public function index()
    {
    	$abouts = About::all();
                
        return view('about.about', [
            'title' => 'About',
            'abouts' => $abouts
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/about');
        }
        return view('about.create');
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/about');
        }

        $data = $request->all();
        
        About::create($data);
        
        return redirect ('/about');
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/about');
        }
        
        $about = About::find($id);
        
        return view('about.edit', [
            'about' =>$about
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/login');
        }
        
        $data = $request->all();
        
        About::find($id)->update($data);
        
        return redirect('/about');
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/about');
        }
        
        if(!empty($id)){
            About::find($id)->delete();
        }
        
        return redirect ('/about');
    }
}
