@extends('admin.layout._base')
@section('content')

<div class="container">
  <div class="row">
    <strong>Toutes les promotions</strong>
  </div>
  <a href="{{ route('post.create')}}" class="btn btn-primary">Ajouter Promotion</a>
  <div class="thumbnail">
    @foreach ($posts as $post)

    <h4><a href="{{route('post.show',$post)}}">{{ $post->name }} </a></h4>
    <hr>

    @endforeach
  </div>
</div>

@endsection
