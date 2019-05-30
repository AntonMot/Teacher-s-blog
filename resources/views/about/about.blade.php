@extends('layouts.app')

@section('title')
	Про мене
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/about/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($abouts as $about)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/about/' .  $about->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/about/' .  $about->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $about->title }} </h3>
			{!! $about->content !!}
		</div>
	@endforeach
</div>

@endsection