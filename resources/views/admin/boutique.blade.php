
@extends('admin.layout._base')

@section('content')


<div class="col-md-8" id="map-box">
        <input class="form-control" id="search" type="search" name="search" placeholder="Entrée l'emplacement de boutique">
        <div id="map">
        </div>

      <br>
        <form class="" action="{{ route('boutique.store') }}" method="post">

{{ csrf_field() }}
        <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
            <label for="prenom" class="col-md-4 control-label">Nom boutique</label>

            <div class="col-md-6">
                <input id="adresse" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
            <label for="prenom" class="col-md-4 control-label">Adresse</label>

            <div class="col-md-6">
                <input id="adresse" type="text" class="form-control" name="adresse" value="{{ old('adresse') }}" autofocus>

                @if ($errors->has('adresse'))
                    <span class="help-block">
                        <strong>{{ $errors->first('adresse') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('lng') ? ' has-error' : '' }}">
            <label for="prenom" class="col-md-4 control-label">Langitude</label>

            <div class="col-md-6">
                <input id="lng" type="text" class="form-control" name="lng" value="{{ old('lng') }}" autofocus>

                @if ($errors->has('lng'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lng') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('lat') ? ' has-error' : '' }}">
            <label for="lat" class="col-md-4 control-label">Latitude</label>

            <div class="col-md-6">
                <input id="lat" type="text" class="form-control" name="lat" value="{{ old('lat') }}" autofocus>

                @if ($errors->has('lat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lat') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary" name="button">Ajouter Boutique</button>
            
        </div>
</div>
</form>


@endsection
