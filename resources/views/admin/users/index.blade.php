@extends('admin.template.main')

@section('title', 'Index Usuarios')

@section('content')
<a href="{{ route('admin.users.create')}}" class="btn btn-primary">Crear Usuario</a>
  <table class="table table-striped table-bordered">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            @if($user->type == "admin")
              <span class="badge badge-primary">{{ $user->type }}</span>
            @elseif ($user->type == "editor")
              <span class="badge badge-info">{{ $user->type }}</span>
            @elseif ($user->type == "client")
              <span class="badge badge-success">{{ $user->type }}</span>
            @else
              <span class="badge badge-secondary">{{ $user->type }}</span>
            @endif
          </td>
          <td><a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Esta seguro que quiere Eliminarlo?')" class="btn btn-danger">Eliminar
              </a>
              <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Editar
              </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center">
    {!! $users->render() !!}
  </div>
@Endsection
