@extends('admin.layout._base')
@section('content')

<br>
<br>

<div class="thumbnail">

  <h6>{{ $post->id }}</h6>

  <h1> {{ $post->body }}</h1>
  <p>{{ $post->created_at}}</p>
  <p>{{ $post->updated_at}}</p>
</div>
<a href="{{route('post.edit',$post)}}" class="btn btn-warning">Editer</a>|
<form  action="{{ route('post.destroy',$post)}}" method="post">
  {{ csrf_field() }}
  {{ method_field('DELETE') }}
<input type="submit" name="" class="btn btn-danger" value="Delete" onclick="are you Sure to delete !">
</form>

@endsection
