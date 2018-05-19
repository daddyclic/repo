<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('libelle', 'Libelle:') !!}
    {!! Form::text('libelle', null, ['class' => 'form-control']) !!}
    {!! $errors->first('libelle', '<div class="help-block">:message</div>') !!}
</div>

<!-- Puissance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puissance', 'Puissance:') !!}
    {!! Form::number('puissance', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('marqueporteur.index') !!}" class="btn btn-default">Cancel</a>
</div>
