@extends('admin.template.main')

@section('title', 'Editar Articulo' . $article->id)

@section('h1', 'Editar Articulo ' . $article->title)

@section('content')
  {!! Form::open(['route' => ['admin.articles.update', $article], 'method' => 'PUT']) !!}
      <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title', $article->title, ['class' => 'form-control', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('group_id', 'Grupo') !!}
        {!! Form::select('group_id', $groups, $article->group->id, ['class' => 'form-control', 'placeholder' => 'Seleccione un Grupo', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('content', 'Descripción') !!}
        {!! Form::textarea('content', $article->content, ['class' => 'form-control', 'placeholder' => 'Descripción del Articulo']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::select('tags', $tags, $my_tags, ['class' => 'form-control', 'placeholder' => 'Seleccione un Tag', 'required']) !!}
      </div>



      <div class="form-group">
        {!! Form::submit('Editar Articulo', ['class' => 'btn btn-primary']) !!}
      </div>
  {!! Form::close() !!}

@endsection

@section('js')


@endsection
