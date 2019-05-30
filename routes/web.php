<?php

Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/law', 'LawController@index');
Route::get('/calendar', 'CalendarController@index');
Route::get('/concurs', 'ConcursController@index');
Route::get('/history', 'HistoryController@index');

Route::get('/teacher/plan', 'PlanController@index');
Route::get('/teacher/lesson', 'LessonController@index');
Route::get('/teacher/event', 'EventController@index');

Route::get('/pupil/zno', 'ZnoController@index');
Route::get('/pupil/olympist', 'OlympistController@index');
Route::get('/pupil/olympprav', 'OlymppravController@index');

Route::get('/parent/mark', 'MarkController@index');
Route::get('/parent/advice', 'AdviceController@index');
Route::get('/parent/right', 'RightController@index');

Route::get('/weekdays/life', 'LifeController@index');
Route::get('/weekdays/mission', 'MissionController@index');
Route::get('/weekdays/deal', 'DealController@index');
Route::get('/weekdays/trip', 'TripController@index');

Route::get('/quest', 'QuestController@index');

Auth::routes();

Route::middleware(["auth"])->group(function(){
    Route::get('/post/create', 'HomeController@create');
    Route::get('/post/{id}/edit', 'HomeController@edit');
    Route::get('/post/{id}/delete', 'HomeController@destroy');
    Route::post('/post/create', 'HomeController@add');
    Route::post('/post/{id}', 'HomeController@update');

    Route::get('/about/create', 'AboutController@create');
    Route::get('/about/{id}/edit', 'AboutController@edit');
    Route::get('/about/{id}/delete', 'AboutController@destroy');
    Route::post('/about/create', 'AboutController@add');
    Route::post('/about/{id}', 'AboutController@update');

    Route::get('/history/create', 'HistoryController@create');
    Route::get('/history/{id}/edit', 'HistoryController@edit');
    Route::get('/history/{id}/delete', 'HistoryController@destroy');
    Route::post('/history/create', 'HistoryController@add');
    Route::post('/history/{id}', 'HistoryController@update');

    Route::get('/law/create', 'LawController@create');
    Route::get('/law/{id}/edit', 'LawController@edit');
    Route::get('/law/{id}/delete', 'LawController@destroy');
    Route::post('/law/create', 'LawController@add');
    Route::post('/law/{id}', 'LawController@update');

    Route::get('/calendar/create', 'CalendarController@create');
    Route::get('/calendar/{id}/edit', 'CalendarController@edit');
    Route::get('/calendar/{id}/delete', 'CalendarController@destroy');
    Route::post('/calendar/create', 'CalendarController@add');
    Route::post('/calendar/{id}', 'CalendarController@update');

    Route::get('/concurs/create', 'ConcursController@create');
    Route::get('/concurs/{id}/edit', 'ConcursController@edit');
    Route::get('/concurs/{id}/delete', 'ConcursController@destroy');
    Route::post('/concurs/create', 'ConcursController@add');
    Route::post('/concurs/{id}', 'ConcursController@update');

    Route::get('/quest/create', 'QuestController@create');
    Route::get('/quest/{id}/edit', 'QuestController@edit');
    Route::get('/quest/{id}/delete', 'QuestController@destroy');
    Route::post('/quest/create', 'QuestController@add');
    Route::post('/quest/{id}', 'QuestController@update');

    Route::get('/plan/create', 'PlanController@create');
    Route::get('/plan/{id}/edit', 'PlanController@edit');
    Route::get('/plan/{id}/delete', 'PlanController@destroy');
    Route::post('/plan/create', 'PlanController@add');
    Route::post('/plan/{id}', 'PlanController@update');

    Route::get('/lesson/create', 'LessonController@create');
    Route::get('/lesson/{id}/edit', 'LessonController@edit');
    Route::get('/lesson/{id}/delete', 'LessonController@destroy');
    Route::post('/lesson/create', 'LessonController@add');
    Route::post('/lesson/{id}', 'LessonController@update');

    Route::get('/event/create', 'EventController@create');
    Route::get('/event/{id}/edit', 'EventController@edit');
    Route::get('/event/{id}/delete', 'EventController@destroy');
    Route::post('/event/create', 'EventController@add');
    Route::post('/event/{id}', 'EventController@update');

    Route::get('/zno/create', 'ZnoController@create');
    Route::get('/zno/{id}/edit', 'ZnoController@edit');
    Route::get('/zno/{id}/delete', 'ZnoController@destroy');
    Route::post('/zno/create', 'ZnoController@add');
    Route::post('/zno/{id}', 'ZnoController@update');

    Route::get('/olympist/create', 'OlympistController@create');
    Route::get('/olympist/{id}/edit', 'OlympistController@edit');
    Route::get('/olympist/{id}/delete', 'OlympistController@destroy');
    Route::post('/olympist/create', 'OlympistController@add');
    Route::post('/olympist/{id}', 'OlympistController@update');

    Route::get('/olympprav/create', 'OlymppravController@create');
    Route::get('/olympprav/{id}/edit', 'OlymppravController@edit');
    Route::get('/olympprav/{id}/delete', 'OlymppravController@destroy');
    Route::post('/olympprav/create', 'OlymppravController@add');
    Route::post('/olympprav/{id}', 'OlymppravController@update');

    Route::get('/mark/create', 'MarkController@create');
    Route::get('/mark/{id}/edit', 'MarkController@edit');
    Route::get('/mark/{id}/delete', 'MarkController@destroy');
    Route::post('/mark/create', 'MarkController@add');
    Route::post('/mark/{id}', 'MarkController@update');

    Route::get('/advice/create', 'AdviceController@create');
    Route::get('/advice/{id}/edit', 'AdviceController@edit');
    Route::get('/advice/{id}/delete', 'AdviceController@destroy');
    Route::post('/advice/create', 'AdviceController@add');
    Route::post('/advice/{id}', 'AdviceController@update');

    Route::get('/right/create', 'RightController@create');
    Route::get('/right/{id}/edit', 'RightController@edit');
    Route::get('/right/{id}/delete', 'RightController@destroy');
    Route::post('/right/create', 'RightController@add');
    Route::post('/right/{id}', 'RightController@update');

    Route::get('/life/create', 'LifeController@create');
    Route::get('/life/{id}/edit', 'LifeController@edit');
    Route::get('/life/{id}/delete', 'LifeController@destroy');
    Route::post('/life/create', 'LifeController@add');
    Route::post('/life/{id}', 'LifeController@update');

    Route::get('/mission/create', 'MissionController@create');
    Route::get('/mission/{id}/edit', 'MissionController@edit');
    Route::get('/mission/{id}/delete', 'MissionController@destroy');
    Route::post('/mission/create', 'MissionController@add');
    Route::post('/mission/{id}', 'MissionController@update');

    Route::get('/deal/create', 'DealController@create');
    Route::get('/deal/{id}/edit', 'DealController@edit');
    Route::get('/deal/{id}/delete', 'DealController@destroy');
    Route::post('/deal/create', 'DealController@add');
    Route::post('/deal/{id}', 'DealController@update');

    Route::get('/trip/create', 'TripController@create');
    Route::get('/trip/{id}/edit', 'TripController@edit');
    Route::get('/trip/{id}/delete', 'TripController@destroy');
    Route::post('/trip/create', 'TripController@add');
    Route::post('/trip/{id}', 'TripController@update');
    
});
