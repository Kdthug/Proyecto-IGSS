@extends('admin.template.main')

@section('title', 'Editar Grupo')

@section('h1', 'Editar Grupo ' . $group->name)

@section('content')
  {!! Form::open(['route' => ['admin.groups.update', $group], 'method' => 'PUT']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $group->name, ['class' => 'form-control',  'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@Endsection
