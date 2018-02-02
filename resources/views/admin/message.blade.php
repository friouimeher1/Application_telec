@extends('admin.layout._base')

@section('content')



<div class="panel-body">
							<table class="table bootstrap-datatable countries">
								<thead>
									<tr>
										<th>#</th>
										<th>Sujet</th>
										<th>Description</th>
										<th>Action</th>

									</tr>
								</thead>
								<tbody>


								@foreach($m as $c)
									<tr>
										<td>{{ $c->id }}</td>
										<td>{{ $c->sujet }}</td>
										<td>{{ $c->description }}</td>
                    <td>
                      <form method="POST" action="{{ route('message.delete',$c->id) }}" accept-charset="UTF-8">
                      {{ csrf_field() }}
                      <input name="_method" type="hidden" value="DELETE">
                        <div class="btn-group">

                        <input type="submit" class="btn btn-danger" onclick="return confirm('Confirmer suppression ?');" value="Supprimer">
                      </div>
                      </form>
                    <a class="btn btn-info" href="{{ route('gereclient.create')}}">Envoyer</a>

                    </td>
									</tr>
                  @endforeach
								</tbody>
							</table>
						</div>

					</div>

@endsection
