@extends('layouts.app')

@section('title')
	Історія школи
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/history/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($histories as $history)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/history/' .  $history->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/history/' .  $history->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $history->title }} </h3>
			{!! $history->content !!}
		</div>
	@endforeach
</div>

@endsection