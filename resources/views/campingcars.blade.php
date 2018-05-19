@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Camping Car
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
{!! Form::open(array('route' => 'campingcar.index', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_etat', 'Id_etat:') !!}
			{!! Form::text('id_etat') !!}
		</li>
		<li>
			{!! Form::label('id_cellule', 'Id_cellule:') !!}
			{!! Form::text('id_cellule') !!}
		</li>
		<li>
			{!! Form::label('id_porteur', 'Id_porteur:') !!}
			{!! Form::text('id_porteur') !!}
		</li>
		<li>
			{!! Form::label('id_caracteristique', 'Id_caracteristique:') !!}
			{!! Form::text('id_caracteristique') !!}
		</li>
		<li>
			{!! Form::label('id_type', 'Id_type:') !!}
			{!! Form::text('id_type') !!}
		</li>
		<li>
			{!! Form::label('prix', 'Prix:') !!}
			{!! Form::text('prix') !!}
		</li>
		<li>
			{!! Form::label('MEC', 'MEC:') !!}
			{!! Form::text('MEC') !!}
		</li>
		<li>
			{!! Form::label('kilometrage', 'Kilometrage:') !!}
			{!! Form::text('kilometrage') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!} 

                    <a href="{!! route('campingcar.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

