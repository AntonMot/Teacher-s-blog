<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
    
class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
                
        return view('home.home', [
            'title' => 'Home',
            'posts' => $posts
        ]);
    }
    
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/login');
        }
        return view('home.create');
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/login');
        }

        $data = $request->all();
        
        Post::create($data);
        
        return redirect ('/');
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/login');
        }
        
        $post = Post::find($id);
        
        return view('home.edit', [
            'post' =>$post
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/login');
        }
        
        $data = $request->all();
        
        Post::find($id)->update($data);
        
        return redirect('/');
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/login');
        }
        
        if(!empty($id)){
            Post::find($id)->delete();
        }
        
        return redirect ('/');
    }
}
