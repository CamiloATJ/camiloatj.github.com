<table class="table table-responsive" id="mascotas-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Raza</th>
        <th>Edad</th>
        <th>Creado Por</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mascotas as $mascotas)
        <tr>
            <td>{!! $mascotas->nombre !!}</td>
            <td>{!! $mascotas->raza !!}</td>
            <td>{!! $mascotas->edad !!}</td>
            <td>{!! $mascotas->creado_por !!}</td>
            <td>
                {!! Form::open(['route' => ['mascotas.destroy', $mascotas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mascotas.show', [$mascotas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('mascotas.edit', [$mascotas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>