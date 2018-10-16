@extends('admin.template.main')

@section('title', 'Index Documentos')

@section('h1', 'Index Documentos')

@section('content')

<nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand pb-2" href="#">Menu de Documentos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
                @foreach ($menus as $key => $item)
                    @if ($item['parent'] != 0)
                        @break
                    @endif
                    @include('partials.menu-item', ['item' => $item])
                @endforeach
            </ul>
        </div>
    </div>
</nav>

<div class="container">
  <section>

<a href="{{ route('admin.files.create')}}" class="btn btn-primary">Subir Documento</a>
  {!! Form::open(['route' => 'admin.files.index', 'method' => 'GET', 'class' => 'navbar-form-right']) !!}
      <div class="form-group">

        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Search file..', 'aria-describedby' => 'search']) !!}
        <span class="glyphicon-search" id="search" aria-hidden="true"></span>
      </div>
  {!! Form::close() !!}
<table class="table table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Contenido</th>
      <th scope="col">Tamaño</th>
      <th scope="col">Extensión</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($files as $file)
      <tr>
        <td>{{ $file->name }}</td>
        <td>{{ $file->description }}</td>
        <td>{{ $file->sizeInKb }}</td>
        <td>{{ $file->extension }}</td>

        <td>
          <a href="{{ $file->public_url }}" target="_blank" class= "btn btn-info">
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

</section>







@Endsection
