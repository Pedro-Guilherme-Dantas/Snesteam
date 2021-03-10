@extends('layouts.admin.main')
@section('title','Lista de Usuários')

@section('content')
	@if(session('msg'))
        <p id="msg">{{ session('msg') }}</p>
    @endif
    <div class="container">
		<div class="row">
			<div class="col-md">
				<div class="search-div">
					<form action="{{ route('admin.users.index')}}" method="GET">
						<input class="search-input py-30" placeholder="Buscar usuários" autocomplete="off" type="text" id="search" name="search" value="{{ old('search') }}">
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
				@if(count($users) > 0 )
					<h1 id="EJ">Exibindo os usuários</h1>
						<table class="table table-hover" id="tabelaAdmin">
							<thead>
								<th>Nome</th>
								<th>Email</th>
								<th></th>
							</thead>
							<tbody>
									@foreach($users as $user)	
									<tr>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>
											<form action="{{route('admin.users.destroy',$user->id) }}" method="POST">
												@csrf
												@method('DELETE')
												<input type="submit" name="excluir" value="Excluir" class="btn btn-dark">
											</form>
										</td>
									</tr>
									@endforeach		
							</tbody>
						</table>
					@elseif(count($users)==0 && $search)
						<p>Não foi possível encontrar resultados com: {{$search}}! <a href="{{ route('admin.users.index') }}" id="searchlink">Ver todos os usuários</a></p>
					@elseif(count($users)==0)
						<p>Não existem usuários cadastrados!</p>
					@endif
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="paginate">
					@if(!$search)
						{{ $users->links() }}
					@endif
				</div>	
			</div>
		</div>	
	</div>

@endsection