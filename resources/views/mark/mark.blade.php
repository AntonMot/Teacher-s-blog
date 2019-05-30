@extends('layouts.app')

@section('title')
	Батькам • Критерії оцінюання
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/mark/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($marks as $mark)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/mark/' .  $mark->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/mark/' .  $mark->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $mark->title }} </h3>
			{!! $mark->content !!}
		</div>
	@endforeach
</div>

@endsection