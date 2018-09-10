@extends('admin.template.main')

@section('title', 'Editar Tag')

@section('h1', 'Editar Tag ' . $tag->name)

@section('content')
  {!! Form::open(['route' => ['admin.tags.update', $tag], 'method' => 'PUT']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $tag->name, ['class' => 'form-control',  'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@Endsection
