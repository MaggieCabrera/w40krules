@section('content')

	{{ Form::open(['route' => 'rules.store']) }}
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name') }}
		{{ Form::label('description', 'Descripción') }}
		{{ Form::textarea('description') }}
		{{ Form::label('army', 'Ejército') }}
		{{ Form::select('army', array_merge(array(0 => 'Regla Especial (aplicable a cualquier ejército)'),$army), 'default') }}
		{{ Form::submit('Guardar', ["class"=>'button']) }}
	{{ Form::close() }}

	{{ $errors->first('name') }}
	{{ $errors->first('description') }} 

@stop