@section('content')
	<h1>{{$army->name}}</h1>

	{{ HTML::link(route('units.create'), 'Crear unidad', ["class"=>'button'])}}
@stop