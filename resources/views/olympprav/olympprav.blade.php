@extends('layouts.app')

@section('title')
	Учням • Підготовка до олімпіади з правознавства
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/olympprav/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($olymppravs as $olympprav)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/olympprav/' .  $olympprav->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/olympprav/' .  $olympprav->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $olympprav->title }} </h3>
			{!! $olympprav->content !!}
		</div>
	@endforeach
</div>

@endsection