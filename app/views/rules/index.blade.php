@section('content')

	<h1>Lista de reglas</h1>
	<ul class="rules">
		@foreach($rules as $rule)
			<li>		
				{{ HTML::link(route('rules.show', ['rules' => $rule->id]), $rule->name)}}
			</li>
		@endforeach
	</ul>
@stop