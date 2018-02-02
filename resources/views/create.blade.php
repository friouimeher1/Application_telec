@extends('admin.layout._base')
@section('content')
<br>
<br>
  <form  action="{{ route('post.store') }}" method="post">
    {{ csrf_field() }}

    @include('layouts._form',['submitButton'=>'Add Post'])



  </form>


@endsection
