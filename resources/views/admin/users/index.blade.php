@extends('admin.template.main')

@section('title', 'Index Usuarios')

@section('h1', 'Usuarios')

@section('content')
<a href="{{ route('admin.users.create')}}" class="btn btn-primary">Crear Usuario</a>
  <table class="table table-striped table-bordered">
    <thead class="thead-light">
      <tr>
        <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">ID</font></th>
        <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Nombre</font></th>
        <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Correo</font></th>
        <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Tipo</font></th>
        <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Acción</font></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            {{ $user->type }}
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
