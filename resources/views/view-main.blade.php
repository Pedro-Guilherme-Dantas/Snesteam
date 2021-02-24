@extends('layouts.main')
@section('title','Lista de Jogos')

@section('content')
	@if(session('msg'))
        <p id="msg">{{ session('msg') }}</p>
    @endif
	<div class="col-md-6 offset-md3">
		<h1>Exibindo os jogos</h1>
		@if( count($games) > 0 )
		<table class="table table-hover" id="tabelaAdmin">
			<thead>
				<th>Imagem Capa</th>
				<th>Imagem 1</th><th>Imagem 2</th><th>Imagem 3</th><th>Imagem 4</th>
				<th>Título</th>
				<th>Descrição</th>
				<th>Baixar</th>
				<th>Comentarios</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
				@foreach($games as $game)	
					<tr>
						<td><img src="/storage/{{$game->cover}}" alt="{{$game->title}}-cover" title="{{$game->title}}-cover"></td>
						@for($i=1;$i<=4;$i++)
							<td>
								<img src="/storage/{{$game['img'.$i]}}" alt="{{$game->title}}-{{$i}}" title="{{$game->title}}-{{$i}}">
							</td>
						@endfor
						<td>{{$game->title}}</td>
						<td>{{$game->description}}</td>
						<td><a href="/storage/{{$game->file}}">{{$game->title}}</a></td>
						<td><a href="comments/{{$game->id}}" class="btn btn-light">Comentários</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<p>Não existem jogos cadastrados!</p>
		@endif
		<form action="/logout" method="POST">
			@csrf
			<a href="/logout" class="btn btn-danger" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
		</form>
	</div>

@endsection