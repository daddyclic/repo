{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('millesime', 'Millesime:') !!}
			{!! Form::text('millesime') !!}
		</li>
		<li>
			{!! Form::label('nbCouchage', 'NbCouchage:') !!}
			{!! Form::text('nbCouchage') !!}
		</li>
		<li>
			{!! Form::label('nbCarteGrise', 'NbCarteGrise:') !!}
			{!! Form::text('nbCarteGrise') !!}
		</li>
		<li>
			{!! Form::label('nbSalon', 'NbSalon:') !!}
			{!! Form::text('nbSalon') !!}
		</li>
		<li>
			{!! Form::label('longueur', 'Longueur:') !!}
			{!! Form::text('longueur') !!}
		</li>
		<li>
			{!! Form::label('largeur', 'Largeur:') !!}
			{!! Form::text('largeur') !!}
		</li>
		<li>
			{!! Form::label('hauteur', 'Hauteur:') !!}
			{!! Form::text('hauteur') !!}
		</li>
		<li>
			{!! Form::label('eauPropre', 'EauPropre:') !!}
			{!! Form::text('eauPropre') !!}
		</li>
		<li>
			{!! Form::label('eauUsee', 'EauUsee:') !!}
			{!! Form::text('eauUsee') !!}
		</li>
		<li>
			{!! Form::label('PTAC', 'PTAC:') !!}
			{!! Form::text('PTAC') !!}
		</li>
		<li>
			{!! Form::label('charge', 'Charge:') !!}
			{!! Form::text('charge') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}