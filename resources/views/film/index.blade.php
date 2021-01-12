@extends ('admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Films <a href="film/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('film.search')
	</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
<div class="table-responsive">

<table class="table table-striped table-bordered table-condensed table-hover">

<thead>

<th>Titulo</th>
<th>Descipción</th>
<th>Duración Alquiler</th>
<th>Tasa de Alquiler</th>
<th>Tamaño</th>
</thead>
@foreach($films as $film )
<tr> 
  <td>{{$film->title}}</td>
  <td>{{$film->description}}</td>
  <td>{{$film->rental_duration}}</td>
  <td>{{$film->rental_rate}}</td>
  <td>{{$film->length}}</td>
  <td> 
  <a href="" data-target="#modal-{{$film->film_id}}" data-toggle="modal"><button class="btn btn-danger" >Eliminar</button></a>
  </td>
</tr>
@include('film.modal')
@endforeach
</table>

</div>

 {{$films->render()}}

</div>
</div>

@endsection


