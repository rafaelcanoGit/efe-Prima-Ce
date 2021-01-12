<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-{{$film->film_id}}">
	<!-- {{Form::Open(array('url'=>array('dvdrentalstore/film/delete', $film->film_id),'method'=>'DELETE'))}} -->
    {!!Form::open(['url' => ['dvdrentalstore/film', $film->film_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">Eliminar Film</h3>
			</div>
			<div class="modal-footer">
                {{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>