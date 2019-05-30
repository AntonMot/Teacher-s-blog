@extends('layouts.app')

@section('title')
	Батькам • Права та обов'язки батьків
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/right/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($rights as $right)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/right/' .  $right->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/right/' .  $right->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $right->title }} </h3>
			{!! $right->content !!}
		</div>
	@endforeach
</div>

@endsection