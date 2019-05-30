<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;			//
use Auth;

class LessonController extends Controller  //
{
    public function index()
    {
    	$lessons = Lesson::all();           //  //
                
        return view('lesson.lesson', [      //  //
            'title' => 'Lesson',          //
            'lessons' => $lessons			//  //
        ]);
    }
    
    public function create()
    {
        if (!Auth::check()){
            return redirect('/teacher/lesson');   //
        }
        return view('lesson.create');		//
    }
    
    public function add(Request $request)
    {
        if (!Auth::check()){
            return redirect('/teacher/lesson');     //
        }

        $data = $request->all();
        
        Lesson::create($data);			  //
        
        return redirect ('/teacher/lesson');		  //
    }
    
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/teacher/lesson');	  //
        }
        
        $lesson = Lesson::find($id);		  //  //
        
        return view('lesson.edit', [		  //
            'lesson' =>$lesson 				  //  //
        ]);
    }
    
    public function update($id, Request $request)
    {
        if (!Auth::check()){
            return redirect('/teacher/lesson');	 //
        }
        
        $data = $request->all();
        
        Lesson::find($id)->update($data);	 //
        
        return redirect('/teacher/lesson');		 //
    }
    
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/teacher/lesson');	 //
        }
        
        if(!empty($id)){
            Lesson::find($id)->delete();   //
        }
        
        return redirect ('/teacher/lesson');		 //
    }
}
