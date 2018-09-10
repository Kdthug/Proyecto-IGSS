@extends('admin.template.main')

@section('title', 'Index Tags')

@section('h1', 'Index Tags')

@section('content')

<a href="{{ route('admin.tags.create')}}" class="btn btn-primary">Crear Tag</a>
  {!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form-right']) !!}
      <div class="form-group">

        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Search tag..', 'aria-describedby' => 'search']) !!}
        <span class="glyphicon-search" id="search" aria-hidden="true"></span>
      </div>
  {!! Form::close() !!}
<table class="table table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tags as $tag)
      <tr>
        <td>{{ $tag->id }}</td>
        <td>{{ $tag->name }}</td>
        <td><a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('¿Esta seguro que quiere Eliminarlo?')" class="btn btn-danger">Eliminar
            </a>
            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning">Editar
            </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="text-center">
  {!! $tags->render() !!}
</div>
@Endsection
