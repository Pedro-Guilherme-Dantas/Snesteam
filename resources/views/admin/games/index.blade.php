@extends('layouts.admin.main') @section('title','Lista de Jogos') 
@section('content') 
@if(session('msg'))
<p id="msg">{{ session('msg') }}</p>
@endif
<div class="container">
    <div class="row">
        <div class="col-md">
            <div class="search-div">
                <form action="{{ route('admin.games.index')}}" method="GET">
                    <input class="search-input py-30" placeholder="Buscar games" autocomplete="off" type="text" id="search" name="search" value="{{ old('search') }}" />
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 offset-md3">
    <div class="container">
        <div class="row">
            <div class="col">
                @if($search)
                <h4>Pesquisando por: {{$search}}</h4>
                @endif 
				<a title="Adicionar game" href="{{route('admin.games.create')}}" class="btn btn-dark" id="mais">Adicionar game</a>
				<br><br>
				@if(count($games) > 0 )
                <div class="cabecalhoTable">
                    <h1 id="EJ">Exibindo os jogos</h1>
                    <table class="table table-hover" id="tabelaAdmin">
                        <thead>
                            <th>Capa</th>
                            <th>Imagem 1</th>
                            <th>Imagem 2</th>
                            <th>Imagem 3</th>
                            <th>Imagem 4</th>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>
                                Arquivo (
                                <ion-icon name="download-outline"></ion-icon>
                                )
                            </th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($games as $game)
                            <tr>
                                <td>
                                    <img src="{{Storage::disk('s3')->url('game_covers/'.$game->cover)}}" alt="{{$game->title}}-cover" title="{{$game->title}}-cover" />
                                </td>
                                @for($i=1;$i<=4;$i++)
                                <td>
                                    <img src="{{Storage::disk('s3')->url('game_images/'.$game['img'.$i])}}" alt="{{$game->title}}-{{$i}}" title="{{$game->title}}-{{$i}}" />
                                </td>
                                @endfor
                                <td>{{$game->title}}</td>
                                <td><a href="#" data-bs-toggle="modal" data-bs-target="#ModalDescricao{{$game->id}}">Visualizar</a></td>
                                <!-- Modal -->
                                <div class="modal fade" id="ModalDescricao{{$game->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Descrição - {{ $game->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $game->description }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td><a href="{{Storage::disk('s3')->url('game_files/'.$game->file)}}">{{$game->title}}</a></td>
                                <td>
                                    <form action="{{route('admin.games.destroy',$game->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <input type="submit" name="excluir" value="Excluir" class="btn btn-dark" />
                                    </form>
                                </td>
                                <td><a href="{{ route('admin.games.edit',$game->id) }}" class="btn btn-dark">Editar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @elseif(count($games)==0 && $search)
                <p>Não foi possível encontrar resultados com: {{$search}}! <a href="{{ route('admin.games.index') }}" id="searchlink">Ver todos os jogos</a></p>
                @elseif(count($games)==0)
                <p>Não existem jogos cadastrados!</p>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="paginate">
                @if(!$search) {{ $games->links() }} @endif
            </div>
        </div>
    </div>
</div>
@endsection
