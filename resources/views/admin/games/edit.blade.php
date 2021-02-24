@extends('layouts.main')
@section('title','Editar Jogo')
	
@section('content')
	
	<div id="event-create-container" class="col-md-6 offset-md3" id="divFormEdit">
		<h1>Editar Jogo -  {{$game->title}} </h1>
		<form action="{{ route('admin.games.update',$game->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@include('admin.includes.form',['oldTitle'=>$game->title,'oldDesc'=>$game->description,'value'=>'Editar Jogo'])
			@method('PUT')
		</form>
	</div>
@endsection