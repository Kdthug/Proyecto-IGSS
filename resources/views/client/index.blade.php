@extends('admin.template.maineditor')

@section('title', 'Index Documentos')

@section('h1', 'Index Documentos')

@section('content')



{!! Form::open(['route' => 'client.index', 'method' => 'GET', 'class' => 'navbar-form-right']) !!}
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
    </td>
</tr>
@endforeach
  </tbody>
</table>









@Endsection
