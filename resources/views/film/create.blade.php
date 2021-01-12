@extends ('admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Film</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div> 
			@endif

			{!!Form::open(array('url'=>'dvdrentalstore/film','method'=>'POST','autocomplete'=>'off'))!!} 
            {{Form::token()}}
           {{--El metodo para comunicarme con la funcion store que guarda en la database es POST.--}}
		 
           <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rental_duration" class="col-md-4 col-form-label text-md-right">{{ __('Duración Alquiler') }}</label>

                            <div class="col-md-6">
                                <input id="rental_duration" type="number" class="form-control @error('rental_duration') is-invalid @enderror" name="rental_duration" required autocomplete="rental_duration">

                                @error('rental_duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="rental_rate" class="col-md-4 col-form-label text-md-right">{{ __('Tasa de Alquiler') }}</label>
                         <div class="col-md-6">
                                <input id="rental_rate" type="number" class="form-control @error('rental_rate') is-invalid @enderror" name="rental_rate" required autocomplete="rental_rate">

                                @error('rental_rate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="lenght" class="col-md-4 col-form-label text-md-right">{{ __('Tamaño') }}</label>
                        <div class="col-md-6">
                                <input id="lenght" type="number" class="form-control @error('lenght') is-invalid @enderror" name="lenght" required autocomplete="lenght">

                                @error('lenght')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                             
                           
                        <div class="form-group row">
                        <label for="lenguaje" class="col-md-4 col-form-label text-md-right">{{ __('Lenguaje') }}</label>
                        <div class="col-md-6">
                           <select id="lenguaje "name="lenguaje" class="form-control">
                            @foreach($lenguajes as $lenguaje)
                            <option value="{{$lenguaje->id}}"> {{$lenguaje->name}} </option> 
                            @endforeach
                           </select>
                            </div>
                        </div>
                        </div>
                        </div>            
                            </div>
                        </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		
           
			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection