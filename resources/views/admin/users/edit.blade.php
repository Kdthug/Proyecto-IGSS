@extends('admin.template.main')

@section('title', 'Editar Usuario')

@section('h1', 'Editar Usuario ' . $user->name)

@section('content')
  {!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@ejemplo.com', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('type', 'Tipo de Usuario') !!}
        {!! Form::select('type', ['' => 'Seleccione un Tipo ', 'client' => 'Cliente', 'editor' => 'Editor', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('roles', 'Rol de Usuario') !!}
        {!! Form::select('roles', $roles, $my_roles, ['class' => 'form-control', 'placeholder' => 'Seleccione un Rol', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@Endsection
