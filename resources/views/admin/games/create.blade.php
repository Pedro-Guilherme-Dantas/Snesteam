@extends('layouts.main')
@section('title','Admin - Adicionar Jogo')
	
@section('content')
	
	<div id="event-create-container" class="col-md-6 offset-md3">
		<h1>Adcionar um novo Jogo</h1>
		<form action="{{ route('admin.games.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
					<label for="image">Imagem</label>
					<input type="file" name="image" class="form-control">
					@error('image')
						<small>*{{ $message }}</small><br>
					@enderror
			</div>

			<div class="form-group">
					<label for="title">Tiítulo</label>
					<input type="text" name="title" placeholder="Título do jogo" class="form-control" value="{{ old('title') }}">
					@error('title')
						<small>*{{ $message }}</small><br>
					@enderror
			</div>
			<div class="form-group">
					<label for="description">Descrição</label>
					<textarea name="description" placeholder="Descrição do Jogo" class="form-control">{{ old('description') }}</textarea>
					@error('description')
						<small>*{{ $message }}</small><br>
					@enderror
			</div>
			<div class="form-group">
					<label for="file">Arquivo do jogo</label>
					<input type="file" name="file" class="form-control">
					@error('file')
						<small>*{{ $message }}</small><br>
					@enderror
					@if(session('msgZip'))
            			<small>*{{ session('msgZip') }}</small>
    				@endif
			</div>
			<br>
			<input type="submit" name="adicionargame" value="Adicionar Jogo" class="btn btn-dark">
		</form>
	</div>
@endsection