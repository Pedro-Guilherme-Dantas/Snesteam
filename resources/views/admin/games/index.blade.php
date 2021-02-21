@extends('layouts.main')
@section('title','Lista de Jogos')

@section('content')
	@if(session('msg'))
        <p id="msg">{{ session('msg') }}</p>
    @endif
	<div class="col-md-6 offset-md3">
		<h1>Exibindo os jogos</h1>
		<table class="table table-hover" id="tabelaAdmin">
			<thead>
				<th>Imagem Capa</th>
				<th>Imagem 1</th><th>Imagem 2</th><th>Imagem 3</th><th>Imagem 4</th>
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
						<td><img src="/storage/{{$game->cover}}" alt="{{$game->title}}" title="{{$game->title}}"></td>
						@for($i=1;$i<=4;$i++)
							<td>
								<img src="/storage/{{$game['img'.$i]}}" alt="{{$game->title}}-{{$i}}" title="{{$game->title}}-{{$i}}">
							</td>
						@endfor
						<td>{{$game->title}}</td>
						<td>{{$game->description}}</td>
						<td><a href="/storage/{{$game->file}}">{{$game->title}}</a></td>
						<td>
							<form action="{{route('admin.games.destroy',$game->id) }}" method="POST">
								@csrf
								@method('DELETE')
								<input type="submit" name="excluir" value="Excluir" class="btn btn-dark">
							</form>
						</td>
						<td><a href="{{ route('admin.games.edit',$game->id) }}" class="btn btn-dark">Editar</a></td>
					</tr>
				@endforeach
			@else
				<p>Não existem jogos cadastrados!</p>
			@endif
				
			</tbody>
		</table>
		<a href="{{route('admin.games.create')}}" class="btn btn-dark">Adicionar Game</a>
	</div>

@endsection