@section('content')


	{{ Form::model($unit, ['method' => 'put' ,'route' => ['units.update', $unit->id]]) }}

		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name') }}
		{{ Form::label('value', 'Puntos') }}
		{{ Form::text('value') }}

		{{ Form::label('type', 'Tipo') }}
		{{ Form::select('type', $type, $unit->type) }}

		{{ Form::label('army', 'Ejército') }}
		{{ Form::select('army', $armies) }}
		
		<h2>Opciones de unidad:</h2>

		<h3>Reglas especiales</h3>

		{{ Form::select('rules[]', $rules, null, array('multiple' => 'multiple', 'class'=>'rules')) }}

		{{ Form::submit('Guardar', ["class"=>'button']) }}

	{{ Form::close() }}

	{{ $errors->first('name') }}
	{{ $errors->first('description') }}

@stop


@section('footer-scripts')
<script>
$(document).ready(function(){
	$("select.rules").multiselect().multiselectfilter();
});
</script>
@stop