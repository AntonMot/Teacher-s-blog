@extends('layouts.app')

@section('title')
	Веб-квести
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/quest/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($quests as $quest)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/quest/' .  $quest->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/quest/' .  $quest->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $quest->title }} </h3>
			{!! $quest->content !!}
		</div>
	@endforeach
</div>

@endsection