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
        {!! Form::label('type', 'Perfil') !!}
        {!! Form::select('type', ['' => 'Seleccione un Perfil ', 'client' => 'Cliente', 'editor' => 'Editor', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@Endsection
