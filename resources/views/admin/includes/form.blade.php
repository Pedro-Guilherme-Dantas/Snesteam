<div class="form-group">
		<label for="title">Título</label>
		<input type="text" name="title" placeholder="Título do jogo" class="form-control" value="{{ old('title',$oldTitle) }}">
		@error('title')
			<small>*{{ $message }}</small><br>
		@enderror
</div>
<div class="form-group">
		<label for="description">Descrição</label>
		<textarea name="description" placeholder="Descrição do Jogo" class="form-control">{{ old('description',$oldDesc) }}</textarea>
		@error('description')
			<small>*{{ $message }}</small><br>
		@enderror
</div>
<div class="form-group">
		<label for="cover">Imagem de Capa</label>
		<input type="file" name="cover" class="form-control">
		@error('cover')
			<small>*{{ $message }}</small><br>
		@enderror
</div>

@for($i=1;$i<=4;$i++)
	<div class="form-group">
		<label for="img{{ $i }}">Imagem {{ $i }}</label>
		<input type="file" name="img{{ $i }}" class="form-control">
		@error("img".$i)
		<small>*{{ $message }}</small><br>
		@enderror
	</div>
@endfor

<div class="form-group">
		<label for="file">Arquivo do jogo</label>
		<input type="file" name="file" class="form-control">
		@error('file')
			<small>*{{ $message }}</small><br>
		@enderror
		@if(session('msgZip'))
			<small>*{{ session('msgZip') }}</small>
		@endif
</div>
<br>
<input type="submit" value="{{$value}}" class="btn btn-dark">