@extends('layouts.main')
@section('title','Admin - Adicionar Jogo')
	
@section('content')	
	<div id="event-create-container" class="col-md-6 offset-md3" id="divFormCreate">
		<h1>Adicionar um novo Jogo</h1>
		<form action="{{ route('admin.games.store') }}" method="POST" enctype="multipart/form-data">
			@include('admin.includes.form',['oldTitle'=>'','oldDesc'=>'','value'=>'Adicionar Jogo'])
		</form>
	</div>
@endsection