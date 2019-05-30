@extends('layouts.app')

@section('title')
	Новели законодавства
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/law/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($laws as $law)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/law/' .  $law->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/law/' .  $law->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $law->title }} </h3>
			{!! $law->content !!}
		</div>
	@endforeach
</div>

@endsection