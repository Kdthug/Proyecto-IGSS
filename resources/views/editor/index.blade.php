@extends('admin.template.maineditor')

@section('title', 'Index Documentos')

@section('h1', 'Index Documentos')

@section('content')



<a href="{{ route('editor.create')}}" class="btn btn-primary">Subir Documento</a>
  {!! Form::open(['route' => 'editor.index', 'method' => 'GET', 'class' => 'navbar-form-right']) !!}
      <div class="form-group">

        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Search file..', 'aria-describedby' => 'search']) !!}
        <span class="glyphicon-search" id="search" aria-hidden="true"></span>
      </div>
  {!! Form::close() !!}
<table class="table table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tamaño</th>
      <th scope="col">Extensión</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($files as $file)
      <tr>
        <td>{{ $file->id }}</td>
        <td>{{ $file->name }}</td>
        <td>{{ $file->sizeInKb }}</td>
        <td>{{ $file->extension }}</td>
        <td><a href="{{ $file->public_url }}" target="_blank" class= "btn btn-info">
            Ver
        </a>
        <a href="{{ route('admin.files.download', $file) }}" class= "btn btn-primary">
            Descargar
        </a>
        <form action="{{ route('admin.files.destroy', $file) }}" method="POST" onclick="return confirm('¿Esta seguro que quiere Eliminarlo?')">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach
  </tbody>
</table>









@Endsection
