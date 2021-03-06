<table class="table table-responsive" id="tipoestados-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoestados as $tipoestado)
        <tr>
            <td>{!! $tipoestado->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoestados.destroy', $tipoestado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoestados.show', [$tipoestado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoestados.edit', [$tipoestado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>