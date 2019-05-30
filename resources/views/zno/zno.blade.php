@extends('layouts.app')

@section('title')
	Учням • Підготовка до ЗНО/ДПА
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/zno/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($znos as $zno)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/zno/' .  $zno->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/zno/' .  $zno->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $zno->title }} </h3>
			{!! $zno->content !!}
		</div>
	@endforeach
</div>

@endsection