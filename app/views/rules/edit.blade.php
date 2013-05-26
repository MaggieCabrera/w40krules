@section('content')

{{-- La manera antigua de hacerlo, funciona bien
	{{ Form::open(['method' => 'put' ,'route' => ['rules.update', $rule->id]]) }}
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name', $rule->name ) }}
		{{ Form::label('description', 'Description') }}
		{{ Form::textarea('description', $rule->description) }}
		{{ Form::submit('Guardar') }}
	{{ Form::close() }}

	{{ $errors->first('name') }}
	{{ $errors->first('description') }}
--}}

{{-- Esta manera es mejor porque coge directamente el objeto --}}
	{{ Form::model($rule, ['method' => 'put' ,'route' => ['rules.update', $rule->id]]) }}
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name') }}
		{{ Form::label('description', 'Description') }}
		{{ Form::textarea('description') }}
		{{ Form::submit('Guardar') }}
	{{ Form::close() }}

	{{ $errors->first('name') }}
	{{ $errors->first('description') }}

@stop