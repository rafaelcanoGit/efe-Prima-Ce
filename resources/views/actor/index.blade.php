@extends ('admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Actores <a href="actor/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('actor.search')
	</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
<div class="table-responsive">

<table class="table table-striped table-bordered table-condensed table-hover">

<thead>

<th>Nombre </th>
<th>Apellido</th>
</thead>
@foreach($actors as $actor )
<tr> 
  <td>{{$actor->first_name}}</td>
  <td>{{$actor->last_name}}</td>
  <td> 
  <a href="" data-target="#modal-{{$actor->actor_id}}" data-toggle="modal"><button class="btn btn-danger" >Eliminar</button></a>
  </td>
</tr>
@include('actor.modal')
@endforeach
</table>
</div>
 {{$actors->render()}}
</div>
</div>

@endsection


