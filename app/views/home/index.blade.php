@section('content')

	<h1>Elige tu ejército</h1>

	<ul class="armies">
		@foreach($armies as $army)
			<li>		
				{{ HTML::link(route('armies.show', ['armies' => $army->id]), $army->name)}}
			</li>
		@endforeach
	</ul>

@stop