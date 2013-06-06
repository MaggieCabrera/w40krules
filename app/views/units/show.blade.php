@section('content')
	<h1>{{$unit->name}}</h1>
<pre>
	<?//var_dump($unit)?>
</pre>
	{{ HTML::link(route('units.edit', ['units' => $unit->id]), 'Editar unidad', ["class"=>'button'])}}
@stop