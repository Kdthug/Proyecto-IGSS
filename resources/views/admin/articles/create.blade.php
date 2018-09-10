@extends('admin.template.main')

@section('title', 'Crear Articulo')

@section('h1', 'Crear Articulo')

@section('content')
  {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}
      <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del Articulo', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('group_id', 'Grupo') !!}
        {!! Form::select('group_id', $groups, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Grupo', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('content', 'Descripción') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Descripción del Articulo']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::select('tags', $tags, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Tag', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('file', 'Subir Documento') !!}
        {!! Form::file('file') !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Crear Articulo', ['class' => 'btn btn-primary']) !!}
      </div>
  {!! Form::close() !!}

@endsection

@section('js')


@endsection
