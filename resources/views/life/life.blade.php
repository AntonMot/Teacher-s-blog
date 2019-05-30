@extends('layouts.app')

@section('title')
	Шкільні будні • Наше життя
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/life/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($lifes as $life)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/life/' .  $life->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/life/' .  $life->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $life->title }} </h3>
			{!! $life->content !!}
		</div>
	@endforeach
</div>

@endsection