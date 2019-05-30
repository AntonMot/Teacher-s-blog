@extends('layouts.app')

@section('title')
	Професійні конкурси
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/concurs/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($concurses as $concurs)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/concurs/' .  $concurs->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/concurs/' .  $concurs->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $concurs->title }} </h3>
			{!! $concurs->content !!}
		</div>
	@endforeach
</div>

@endsection