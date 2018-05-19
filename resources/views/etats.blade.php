{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('neuf', 'Neuf:') !!}
			{!! Form::text('neuf') !!}
		</li>
		<li>
			{!! Form::label('vendu', 'Vendu:') !!}
			{!! Form::text('vendu') !!}
		</li>
		<li>
			{!! Form::label('affichage', 'Affichage:') !!}
			{!! Form::text('affichage') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}