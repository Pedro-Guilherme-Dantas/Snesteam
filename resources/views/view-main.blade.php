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
				<th>Baixar</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
			@if( count($games) > 0 )
				@foreach($games as $game)	
					<tr>

						<td><img src="/storage/{{$game->cover}}" alt="{{$game->title}}" title="{{$game->title}}"></td>
						<td><img src="/storage/{{$game->img1}}" alt="{{$game->title}}(1)" title="{{$game->title}}(1)"></td>
						<td><img src="/storage/{{$game->img2}}" alt="{{$game->title}}(2)" title="{{$game->title}}(2)"></td>
						<td><img src="/storage/{{$game->img3}}" alt="{{$game->title}}(3)" title="{{$game->title}}(3)"></td>
						<td><img src="/storage/{{$game->img4}}"alt="{{$game->title}}(4)" title="{{$game->title}}(4)"></td>
						<td>{{$game->title}}</td>
						<td>{{$game->description}}</td>
						<td><a href="/storage/{{$game->file}}">{{$game->title}}</a></td>

					</tr>
				@endforeach
			@else
				<p>Não existem jogos cadastrados!</p>
			@endif
				
			</tbody>
		</table>
		
	</div>

@endsection