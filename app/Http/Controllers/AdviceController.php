<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advice;            //
use Auth;

class AdviceController extends Controller
{
    public function index()
    {
        $advices = Advice::all();

        return view('advice.advice', [
            'title' => 'Advice',
            'advices' => $advices
        ]);
    }

    public function create()
    {
        if (!Auth::check()) {
            return redirect('/parent/advice');
        }
        return view('advice.create');
    }

    public function add(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/parent/advice');
        }

        $data = $request->all();

        Advice::create($data);

        return redirect('/parent/advice');
    }

    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('/parent/advice');
        }

        $advice = Advice::find($id);

        return view('advice.edit', [
            'advice' => $advice
        ]);
    }

    public function update($id, Request $request)
    {
        if (!Auth::check()) {
            return redirect('/parent/advice');
        }

        $data = $request->all();

        Advice::find($id)->update($data);

        return redirect('/parent/advice');
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect('/parent/advice');
        }

        if (!empty($id)) {
            Advice::find($id)->delete();
        }

        return redirect('/parent/advice');
    }
}
