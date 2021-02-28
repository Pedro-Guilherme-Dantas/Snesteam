@extends('layouts.main')
@section('title','Lista de Jogos')

@section('content')
	@if(session('msg'))
        <p id="msg">{{ session('msg') }}</p>
    @endif
    <div class="container">
		<div class="row">
			<div class="col-md">
				<div class="search-div">
					<form action="{{ route('admin.games.index')}}" method="GET">
						<input class="search-input py-30" placeholder="O que está procurando?" autocomplete="off" type="text" id="search" name="search" value="{{ old('search') }}">
					</form>	
				</div>
			</div>

		</div>
	</div>
	<div class="col-md-6 offset-md3">
		@if($search)
			<h4>Pesquisando por: {{$search}}</h4>
		@endif
		
	    @if(count($games) > 0 )
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
					@foreach($games as $game)	
					<tr>
						<td><img src="/storage/game_covers/{{$game->cover}}" alt="{{$game->title}}-cover" title="{{$game->title}}-cover"></td>
						@for($i=1;$i<=4;$i++)
							<td>
								<img src="/storage/game_images/{{$game['img'.$i]}}" alt="{{$game->title}}-{{$i}}" title="{{$game->title}}-{{$i}}">
							</td>
						@endfor
						<td>{{$game->title}}</td>
						<td>{{$game->description}}</td>
						<td><a href="/storage/game_files/{{$game->file}}">{{$game->title}}</a></td>
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
			</tbody>
		</table>
		@elseif(count($games)==0 && $search)
			<p>Não foi possível encontrar resultados com: {{$search}}! <a href="{{ route('admin.games.index') }}" id="searchlink">Ver todos os jogos</a></p>
		@elseif(count($games)==0)
			<p>Não existem jogos cadastrados!</p>
		@endif
		<a href="{{route('admin.games.create')}}" class="btn btn-dark">Adicionar Game</a>
	</div>

@endsection