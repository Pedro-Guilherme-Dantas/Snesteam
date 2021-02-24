<div class="form-group">
    <textarea name="comment" placeholder="Comentário" class="form-control"></textarea>
    @error('comment')
        <small>*{{ $message }}</small><br>
    @enderror
</div>

<div class="form-group">
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="like" name="liked" class="custom-control-input" value='like'>
        <label class="custom-control-label text-primary" for="like">Like</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="dislike" name="liked" class="custom-control-input" value='dislike'>
        <label class="custom-control-label text-danger" for="dislike">Dislike</label>
    </div>
</div>

<input type="submit" value="Comentar" class="btn btn-dark">

