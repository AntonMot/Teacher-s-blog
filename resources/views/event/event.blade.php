@extends('layouts.app')

@section('title')
	Вчителям • Позакласні заходи
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/event/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($events as $event)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/event/' .  $event->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/event/' .  $event->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $event->title }} </h3>
			{!! $event->content !!}
		</div>
	@endforeach
</div>

@endsection