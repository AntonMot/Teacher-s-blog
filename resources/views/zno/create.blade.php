@extends('layouts.app')

@section('content')

<h2>Нова стаття</h2>

<form method="post">
	<div>
		<div>
			<label>Заголовок</label>
		</div>
		<input type="text" name="title">
	</div>
	
	<div>
		<div>
			<label>Зміст статті</label>
		</div>
		<textarea name="content" id='textEd'></textarea>
	</div>
	<button class="btn btn-primary">Зберегти</button>

	<!-- Генерация CSRF ключа для безопасности -->
	{{ csrf_field() }}

</form>


@endsection