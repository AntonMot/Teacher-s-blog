@extends('layouts.app')

@section('title')
	Головна
@endsection

@section('content')

@if(Auth::check())
	
	<a href="{{ url('/post/create') }}" type="button" class="btn btn-primary btn-lg btn-block">
	Нова стаття
	</a>
	<span style="margin: 3px"></span>
@endif

<div>
	@foreach($posts as $post)
		
        @if(Auth::check())
        <div>
        	<a href="{{ url('/post/' .  $post->id.'/edit') }}" type="button" class="btn btn-warning">
        	Редагувати
        	</a>
            
            <a href="{{ url('/post/' .  $post->id.'/delete') }}" type="button" class="btn btn-danger">
            Видалити
        	</a>
        </div>
        <span style="margin: 3px"></span>
        @endif
		
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> {{ $post->title }} </h3>
			{!! $post->content !!}
		</div>
	@endforeach
</div>

@endsection