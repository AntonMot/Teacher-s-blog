<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;
use Auth;

class CalendarController extends Controller
{
    public function index()
    {
        $calendars = Calendar::all();

        return view('calendar.calendar', [
            'title' => 'Calendar',
            'calendars' => $calendars
        ]);
    }

    public function create()
    {
        if (!Auth::check()) {
            return redirect('/calendar');
        }
        return view('calendar.create');
    }

    public function add(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/calendar');
        }

        $data = $request->all();

        Calendar::create($data);

        return redirect('/calendar');
    }

    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('/calendar');
        }

        $calendar = Calendar::find($id);

        return view('calendar.edit', [
            'calendar' => $calendar
        ]);
    }

    public function update($id, Request $request)
    {
        if (!Auth::check()) {
            return redirect('/calendar');
        }

        $data = $request->all();

        Calendar::find($id)->update($data);

        return redirect('/calendar');
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect('/calendar');
        }

        if (!empty($id)) {
            Calendar::find($id)->delete();
        }

        return redirect('/calendar');
    }
}
