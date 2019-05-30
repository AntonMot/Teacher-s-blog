@extends('layouts.app')

@section('title')
	Шкільні будні • Доручення
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/mission/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($missions as $mission)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/mission/' .  $mission->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/mission/' .  $mission->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $mission->title }} </h3>
			{!! $mission->content !!}
		</div>
	@endforeach
</div>

@endsection