@extends('admin.template.main')

@section('title', 'Index Articulos')

@section('h1', 'Index Articulos')

@section('content')

<a href="{{ route('admin.articles.create')}}" class="btn btn-primary">Crear Articulo</a>


{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form-right']) !!}
    <div class="form-group">

      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Search article..', 'aria-describedby' => 'search']) !!}
      <span class="glyphicon-search" id="search" aria-hidden="true"></span>
    </div>
{!! Form::close() !!}

<table class="table table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">Titulo</th>

      <th scope="col">Grupo</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articles as $article)
      <tr>
        <td>{{ $article->id }}</td>
        <td>{{ $article->user->name }}</td>
        <td>{{ $article->title }}</td>


        <td>{{ $article->group->name }}</td>
        <td><a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('¿Esta seguro que quiere Eliminarlo?')" class="btn btn-danger">Eliminar
            </a>
            <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning">Editar
            </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="text-center">
  {!! $articles->render() !!}
</div>
@Endsection
