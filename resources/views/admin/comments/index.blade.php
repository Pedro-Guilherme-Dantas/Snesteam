@extends('layouts.admin.main')
@section('title','Lista de Comentários')

@section('content')
	@if(session('msg'))
        <p id="msg">{{ session('msg') }}</p>
    @endif
    <div class="container">
		<div class="row">
			<div class="col-md">
				<div class="search-div">
					<form action="{{ route('admin.comments.index')}}" method="GET">
						<input class="search-input py-30" placeholder="Buscar comentários" autocomplete="off" type="text" id="search" name="search" value="{{ old('search') }}">
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
				@if(count($comments) > 0 )
					<h1 id="EJ">Exibindo os comentários</h1>
						<table class="table table-hover" id="tabelaAdmin">
							<thead>
								<th>Usuário</th>
								<th>Jogo</th>
                                <th>Conteúdo</th>
                                <th>Data</th>
								<th></th>
							</thead>
							<tbody>
									@foreach($comments as $comment)	
									<tr>
										<td>{{$comment->user->name}}</td>
                                        <td>{{$comment->game->title}}</td>
                                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#ModalConteudo{{$comment->id}}">Visualizar</a></td>
                                        <!-- Modal -->
                                        <div class="modal fade" id="ModalConteudo{{$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Contéudo do Comentário</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{$comment->content}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <td>{{$comment->updated_at}}</td>
										<td>
											<form action="{{route('comments.destroy',$comment->id) }}" method="POST">
												@csrf
												@method('DELETE')
												<input type="submit" name="excluir" value="Excluir" class="btn btn-dark">
											</form>
										</td>
									</tr>
									@endforeach		
							</tbody>
						</table>
					@elseif(count($comments)==0 && $search)
						<p>Não foi possível encontrar resultados com: {{$search}} <a href="{{ route('admin.comments.index') }}" id="searchlink">Ver todos os comentários</a></p>
					@elseif(count($comments)==0)
						<p>Não existem comentários feitos</p>
					@endif
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="paginate">
					@if(!$search)
						{{ $comments->links() }}
					@endif
				</div>	
			</div>
		</div>	
	</div>

@endsection