@extends('layouts.app')

@section('title')
	Шкільні будні • Подорожі
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/trip/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($trips as $trip)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/trip/' .  $trip->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/trip/' .  $trip->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $trip->title }} </h3>
			{!! $trip->content !!}
		</div>
	@endforeach
</div>

@endsection