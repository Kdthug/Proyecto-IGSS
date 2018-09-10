@extends('admin.template.main')

@section('title', 'Index Grupos')

@section('h1', 'Index Grupos')

@section('content')

<a href="{{ route('admin.groups.create')}}" class="btn btn-primary">Crear Grupo</a>
<table class="table table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($groups as $group)
      <tr>
        <td>{{ $group->id }}</td>
        <td>{{ $group->name }}</td>
        <td><a href="{{ route('admin.groups.destroy', $group->id) }}" onclick="return confirm('¿Esta seguro que quiere Eliminarlo?')" class="btn btn-danger">Eliminar
            </a>
            <a href="{{ route('admin.groups.edit', $group->id) }}" class="btn btn-warning">Editar
            </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="text-center">
  {!! $groups->render() !!}
</div>
@Endsection
