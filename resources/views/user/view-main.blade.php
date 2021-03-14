@extends('layouts.main')

@section('title','Jogos')

@section('user_name',Auth::user()->name)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md">
				<div class="search-div">
					<form action="/games" method="GET">
						<input class="search-input py-30" placeholder="O que está procurando?" autocomplete="off" type="text" id="search" name="search">
					</form>	
				</div>
			</div>

		</div>
	</div>
	<div class="container">
		@if($search)
			<h3>Pesquisando por: {{$search}}</h3>
		@endif
		<div class="row">
			<div class="col-xl-12">
				<div class="games-div p-4">
					<div class="row">
							@foreach($games as $game)
								<div class="col-xl-3 mt-3 bg-none games-effect">
									<a href="/games/{{$game->id}}">
										<img width="100%" src="{{Storage::disk('s3')->url('game_covers/'.$game->cover)}}" alt="{{$game->title}}" title="{{$game->title}}">
									</a>
								</div>
							@endforeach
							@if($search && count($games)==0)
								<p>Sem resultados para "{{$search}}"</p>
								<a href="/games" id="searchlink">Ver todos os jogos</a>
							@endif	
					</div>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-12">
				<div class="paginate">
					@if(!$search)
						{{ $games->links() }}
					@endif
				</div>	
			</div>
		</div>	
	</div>

@endsection