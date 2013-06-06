@section('content')

	<h1>Crear una nueva unidad</h1>

	{{ Form::open(['route' => 'units.store']) }}
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name') }}
		{{ Form::label('value', 'Puntos') }}
		{{ Form::text('value') }}
		{{ Form::label('type', 'Tipo') }}
		{{ Form::select('type', $type) }}
		{{ Form::label('army', 'Ejército') }}
		{{ Form::select('army', $armies) }}

		{{ Form::submit('Guardar', ["class"=>'button']) }}
	{{ Form::close() }}

	{{ $errors->first('name') }}
	{{ $errors->first('description') }} 

@stop
