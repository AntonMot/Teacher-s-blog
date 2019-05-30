@extends('layouts.app')

@section('title')
	Шкільні будні • Справи
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/deal/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($deals as $deal)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/deal/' .  $deal->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/deal/' .  $deal->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $deal->title }} </h3>
			{!! $deal->content !!}
		</div>
	@endforeach
</div>

@endsection