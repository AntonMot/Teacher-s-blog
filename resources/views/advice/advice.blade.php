@extends('layouts.app')

@section('title')
	Батькам • Поради психолога
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/advice/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($advices as $advice)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/advice/' .  $advice->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/advice/' .  $advice->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $advice->title }} </h3>
			{!! $advice->content !!}
		</div>
	@endforeach
</div>

@endsection