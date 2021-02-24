@extends('layouts.main')

@section('title','Comentários')

@section('content')

    @if(session('msg'))
        <p id="msg">{{ session('msg') }}</p>
    @endif

    <h1> Comentários de {{$game->title}} </h1>

    <div class="col-md-6 offset-md3">
    <form action="{{ route('comments.store',$game->id) }}" method="POST">
        @csrf
        @include('user.commentform')
    </form>
    </div>

@endsection