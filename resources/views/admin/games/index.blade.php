@extends('layouts.main')
@section('title','Admin - Lista de Jogos')

@section('content')
	<div class="col-md-6 offset-md3">
		<h1>Exibindo os jogos</h1>
		<table class="table table-hover">
			<thead>
				<th>Imagem</th>
				<th>Título</th>
				<th>Descrição</th>
				<th>Arquivo</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
			@if( count($games) > 0 )
				@foreach($games as $game)	
					<tr>
						<td><img src="/storage/{{$game->images}}" style="max-width: 100px" alt="{{$game->title}}" title="{{$game->title}}"></td>
						<td>{{$game->title}}</td>
						<td>{{$game->description}}</td>
						<td><a href="/storage/{{$game->file}}">{{$game->title}}</a></td>
						<td>
							<form action="#" method="POST">
								@csrf
								@method('DELETE')
								<input type="submit" name="excluir" value="Excluir" class="btn btn-dark">
							</form>
						</td>
						<td><a href="" class="btn btn-dark">Editar</a></td>
					</tr>
				@endforeach
			@else
				<p>Não existe jogos cadastrados!</p>
			@endif
				
			</tbody>
		</table>
		<a href="{{route('admin.games.create')}}" class="btn btn-dark">Adicionar Game</a>
	</div>
@endsection