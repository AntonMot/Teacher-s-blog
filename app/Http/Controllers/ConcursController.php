<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concurs;
use Auth;

class ConcursController extends Controller
{
    public function index()
    {
        $concurses = Concurs::all();

        return view('concurs.concurs', [
            'title' => 'Concurs',
            'concurses' => $concurses
        ]);
    }

    public function create()
    {
        if (!Auth::check()) {
            return redirect('/concurses');
        }
        return view('concurs.create');
    }

    public function add(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/concurs');
        }

        $data = $request->all();

        Concurs::create($data);

        return redirect('/concurs');
    }

    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('/concurs');
        }

        $concurs = Concurs::find($id);

        return view('concurs.edit', [
            'concurs' => $concurs
        ]);
    }

    public function update($id, Request $request)
    {
        if (!Auth::check()) {
            return redirect('/concurs');
        }

        $data = $request->all();

        Concurs::find($id)->update($data);

        return redirect('/concurs');
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect('/concurs');
        }

        if (!empty($id)) {
            Concurs::find($id)->delete();
        }

        return redirect('/concurs');
    }
}
