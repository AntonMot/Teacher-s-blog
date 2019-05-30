@extends('layouts.app')

@section('title')
	Учням • Підготовка до олімпіади з історії
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/olympist/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($olympists as $olympist)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/olympist/' .  $olympist->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/olympist/' .  $olympist->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $olympist->title }} </h3>
			{!! $olympist->content !!}
		</div>
	@endforeach
</div>

@endsection