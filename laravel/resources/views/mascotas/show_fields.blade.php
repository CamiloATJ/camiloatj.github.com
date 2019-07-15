<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $mascotas->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $mascotas->nombre !!}</p>
</div>

<!-- Raza Field -->
<div class="form-group">
    {!! Form::label('raza', 'Raza:') !!}
    <p>{!! $mascotas->raza !!}</p>
</div>

<!-- Edad Field -->
<div class="form-group">
    {!! Form::label('edad', 'Edad:') !!}
    <p>{!! $mascotas->edad !!}</p>
</div>

<!-- Creado Por Field -->
<div class="form-group">
    {!! Form::label('creado_por', 'Creado Por:') !!}
    <p>{!! $mascotas->creado_por !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $mascotas->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $mascotas->updated_at !!}</p>
</div>

