@extends('layouts.app')

@section('content')

<h2>Редагувати статтю</h2>

<form method="post" action="{{url('/event/'.$event->id)}}">
	<div>
		<div>
			<label>Заголовок</label>
		</div>
		<input type="text" name="title" value="{{$event->title}}">
	</div>
	<div>
		
	<div>
		<div>
			<label>Зміст статті</label>
		</div>
		<textarea name="content" id="textEd">{{$event->content}}</textarea>
	</div>

	<button class="btn btn-primary" style="margin-top: 10px">Зберегти</button>
	


	<!-- Генерация CSRF ключа для безопасности -->
	{{ csrf_field() }}

</form>


@endsection