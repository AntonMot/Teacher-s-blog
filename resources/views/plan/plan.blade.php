@extends('layouts.app')

@section('title')
	Вчителям • Календарні планування
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/plan/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($plans as $plan)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/plan/' .  $plan->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/plan/' .  $plan->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $plan->title }} </h3>
			{!! $plan->content !!}
		</div>
	@endforeach
</div>

@endsection