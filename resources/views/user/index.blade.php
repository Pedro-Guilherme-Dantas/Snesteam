@extends('layouts.main')

@section('title','Comentários')

@section('content')

    @if(session('msg'))
        <p id="msg">{{ session('msg') }}</p>
    @endif
    @if(session('msg_error'))
    <p id="msg_error">{{ session('msg_error') }}</p>
    @endif

    <a href="/games">Voltar</a>

    <h1> Comentários de {{$game->title}} </h1>

    <div class="col-md-6 offset-md3">
    <form action="{{ route('comments.store',$game->id) }}" method="POST">
        @csrf
        @include('user.commentform')
    </form>
    </div>
    <br>
    @foreach($userComments as $comment)
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">{{ $comment->user->name }}</div>
            <div class="card-body">
                @if($comment->liked==1)
                    <i style="font-size:30px" class="bi bi-hand-thumbs-up"></i>
                @else
                    <i style="font-size:30px" class="bi bi-hand-thumbs-down"></i>
                @endif
                <p class="card-text">{{ $comment->content }}</p>
            </div>
            <form action="{{route('comments.destroy',$comment->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="excluir" value="Excluir" class="btn btn-danger">
            </form>
        </div>
    @endforeach

    @foreach($comments as $comment)
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">{{ $comment->user->name }}</div>
        <div class="card-body">
            @if($comment->liked==1)
                <i style="font-size:30px" class="bi bi-hand-thumbs-up"></i>
            @else
                <i style="font-size:30px" class="bi bi-hand-thumbs-down"></i>
            @endif
            <p class="card-text">{{ $comment->content }}</p>
        </div>
    </div>
@endforeach

@endsection