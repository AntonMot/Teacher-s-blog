@extends('layouts.app')

@section('title')
	Вчителям • Розробки уроків
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/lesson/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($lessons as $lesson)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/lesson/' .  $lesson->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/lesson/' .  $lesson->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $lesson->title }} </h3>
			{!! $lesson->content !!}
		</div>
	@endforeach
</div>

@endsection