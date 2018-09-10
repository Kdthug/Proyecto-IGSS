@extends('admin.template.main')

@section('title', 'Crear Grupo')

@section('h1', 'Crear Grupo')

@section('content')
  {!! Form::open(['route' => 'admin.groups.store', 'method' => 'POST']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Grupo', 'required']) !!}
      </div>

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@endsection
