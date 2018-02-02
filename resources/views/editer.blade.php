@extends('admin.layout._base')
@section('content')
<br>
<br>
  <form  action="{{ route('post.update',$post) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    @include('layouts._form',['submitButton'=>'Update Post'])
  </form>


@endsection
