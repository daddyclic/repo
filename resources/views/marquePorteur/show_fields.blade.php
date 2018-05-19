<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $moteur->id !!}</p>
</div>

<!-- Libelle Field -->
<div class="form-group">
    {!! Form::label('libelle', 'Libelle:') !!}
    <p>{!! $moteur->libelle !!}</p>
</div>

<!-- Puissance Field -->
<div class="form-group">
    {!! Form::label('puissance', 'Puissance:') !!}
    <p>{!! $moteur->puissance !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $moteur->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $moteur->updated_at !!}</p>
</div>

