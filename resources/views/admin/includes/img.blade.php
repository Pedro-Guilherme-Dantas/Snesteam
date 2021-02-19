<div class="form-group">
	<label for="{{ $var }}">Imagem {{ $number }}</label>
	<input type="file" name="{{ $var }}" class="form-control">
	@error($var)
	<small>*{{ $message }}</small><br>
	@enderror
</div>