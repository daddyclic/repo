<table class="table table-responsive" id="moteurs-table">
    <thead>
        <tr>
            <th>Libelle</th>
        <th>Puissance</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($marquePorteurs as $marquePorteur)
        <tr>
            <td>{!! $marquePorteur->libelle !!}</td>
            <td>{!! $marquePorteur->puissance !!}</td>
            <td>
                {!! Form::open(['route' => ['marqueporteur.destroy', $marquePorteur->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('marqueporteur.show', [$marquePorteur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('marqueporteur.edit', [$marquePorteur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
