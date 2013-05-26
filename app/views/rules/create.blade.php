@section('content')

	{{ Form::open(['route' => 'rules.store']) }}
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name') }}
		{{ Form::label('description', 'Description') }}
		{{ Form::textarea('description') }}
		{{ Form::submit('Guardar') }}
	{{ Form::close() }}

	{{ $errors->first('name') }}
	{{ $errors->first('description') }} 

@stop