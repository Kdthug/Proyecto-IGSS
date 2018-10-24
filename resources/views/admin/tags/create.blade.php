@extends('admin.template.main')

@section('title', 'Crear Tag')

@section('h1', 'Crear Tag')

@section('content')
  {!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Tag', 'required']) !!}
      </div>

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}<br /><br />

@endsection
