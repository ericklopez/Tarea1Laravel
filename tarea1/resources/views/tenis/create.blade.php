@extend('layouts.app')

@section('title')
	Formulario para crear tenis
@stop
@section('content')

	<h2>Crear tenis</h2>
	{{Form::open(array('url'=>'tenis/create','role'=>'form'))}}
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		<div class="large-6 small-12 columns">
			{{Form::label('Marca','Marca')}}
			{{Form::text('marca',ull)}}
			{{Form::label('Número','Número')}}
			{{Form::text('numero',null)}}
			{{Form::label('Color','Color')}}
			{{Form::text('color',null)}}
				{{Form::submit('guardar',['class' => 'button postfix'])}}
		</div>
	{{Form::close()}}


@stop