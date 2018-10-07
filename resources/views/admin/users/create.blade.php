@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('h1', 'Crear Usuario')

@section('content')


  {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@ejemplo.com', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**********', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('type', 'Tipo de Usuario') !!}
        {!! Form::select('type', ['' => 'Seleccione un Perfil ', 'visit' => 'Visita', 'client' => 'Cliente', 'editor' => 'Editor', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('role_id', 'Rol de Usuario') !!}
        {!! Form::select('role_id', $roles, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un rol', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@Endsection
