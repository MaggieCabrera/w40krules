@section('content')

	<h1>Lista de unidades</h1>

	{{ HTML::link(route('units.create'), 'Crear unidad', ["class"=>'button'])}}



	<ul class="units">

		@foreach($armies as $army)


		    <li>{{$army->name}}

		    	@if(!empty($army->units) )

					<ul>
					  @foreach($army->units as $aunit)
					    <li>        
					    	<?php //var_dump($aunit)?>
					       {{ HTML::link(route('units.show', ['units' => $aunit->id]), $aunit->name ) }}
					    </li>
					  @endforeach
					</ul>
				@endif
			</li>
		@endforeach
	
	</ul>

@stop