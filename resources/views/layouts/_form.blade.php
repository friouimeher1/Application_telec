<div class="form-group">
  <label for="" class="label label-info">Name</label>
  <input type="text" class="form-control" name="name" value="{{old('name')?? $post->name }}">
  {!! $errors->first('name','<strong style="color:red"> :message  </strong>') !!}
</div>

<div class="form-group">
  <label for="" class="label label-info">Description</label>
  <textarea name="body" class="form-control" rows="8" cols="80">{{old('body')??$post->body }}</textarea>
  {!! $errors->first('body','<strong style="color:red"> :message</strong>') !!}
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary btn-block" name="button">{{ $submitButton }}</button>
</div>
