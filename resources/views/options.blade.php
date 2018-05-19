{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_campingcar', 'Id_campingcar:') !!}
			{!! Form::text('id_campingcar') !!}
		</li>
		<li>
			{!! Form::label('libelle', 'Libelle:') !!}
			{!! Form::text('libelle') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}