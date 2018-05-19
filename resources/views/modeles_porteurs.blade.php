{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_marque', 'Id_marque:') !!}
			{!! Form::text('id_marque') !!}
		</li>
		<li>
			{!! Form::label('libelle', 'Libelle:') !!}
			{!! Form::text('libelle') !!}
		</li>
		<li>
			{!! Form::label('motorisation', 'Motorisation:') !!}
			{!! Form::text('motorisation') !!}
		</li>
		<li>
			{!! Form::label('puissance', 'Puissance:') !!}
			{!! Form::text('puissance') !!}
		</li>
		<li>
			{!! Form::label('couple', 'Couple:') !!}
			{!! Form::text('couple') !!}
		</li>
		<li>
			{!! Form::label('fiscaux', 'Fiscaux:') !!}
			{!! Form::text('fiscaux') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}