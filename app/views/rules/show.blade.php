@section('content')
	<h1>{{$rule->name}}</h1>
	<p>
		{{$rule->description}}
	</p>
	@if ($rule->army != 0)
	<p>
		Regla especial del ejército: <strong>{{ DB::table('armies')->where('id', $rule->army)->pluck('name'); }}</strong>
	</p>
	@endif
	{{ HTML::link(route('rules.edit', ['rules' => $rule->id]), 'Editar regla', ["class"=>'button'])}}
@stop