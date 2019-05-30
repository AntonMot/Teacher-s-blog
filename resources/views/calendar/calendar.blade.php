@extends('layouts.app')

@section('title')
	Календар хнаменних дат
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/calendar/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($calendars as $calendar)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/calendar/' .  $calendar->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/calendar/' .  $calendar->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $calendar->title }} </h3>
			{!! $calendar->content !!}
		</div>
	@endforeach
</div>

@endsection