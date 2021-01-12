<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-{{$actor->actor_id}}">
    {!!Form::open(['url' => ['dvdrentalstore/actor', $actor->actor_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title">Eliminar Actor</h3>
			</div>
			<div class="modal-footer">
                {{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>