<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $clientes->nombre }}</p>
</div>

<!-- Domicilio Field -->
<div class="col-sm-12">
    {!! Form::label('domicilio', 'Domicilio:') !!}
    <p>{{ $clientes->domicilio }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $clientes->telefono }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $clientes->email }}</p>
</div>

<!-- Documento Field -->
<div class="col-sm-12">
    {!! Form::label('documento', 'Documento:') !!}
    <p>{{ $clientes->documento }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $clientes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $clientes->updated_at }}</p>
</div>

<!-- User Name Field -->
<div class="col-sm-12">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{{ $clientes->user_name }}</p>
</div>

