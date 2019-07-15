<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Raza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raza', 'Raza:') !!}
    {!! Form::text('raza', null, ['class' => 'form-control']) !!}
</div>

<!-- Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::text('edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Creado Por Field -->
<div class="form-group col-sm-6">
    {!! Form::label('creado_por', 'Creado Por:') !!}
    {!! Form::text('creado_por', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mascotas.index') !!}" class="btn btn-default">Cancel</a>
</div>
