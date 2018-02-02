@extends('client.layout._base')

@section('content')



<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Contacter Admin</h1>
      <form class="" action="{{ route('contacter.store')}}" method="post">
         {{ csrf_field() }}
        <div class="form-group">
          <input type="text" name="sujet" value="" class="form-contr">
        </div>
        <div class="form-group">
          <textarea name="desc" rows="8" cols="80" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="button">Envoyer message</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
