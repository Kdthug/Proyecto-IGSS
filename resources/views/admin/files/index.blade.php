@extends('admin.template.main')

@section('title', 'Index Documentos')

@section('h1', 'Index Documentos')

@section('content')
<div class="shadow p-3 mb-5 bg-light rounded">
<nav class="navbar navbar-expand-md navbar-light" style="background-color: light;">
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


  {!! Form::open(['route' => 'admin.files.index', 'method' => 'GET', 'class' => 'navbar-form-right']) !!}
      <div class="form-group">

        <div class="container">
    <br/>
  <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Buscar Documento" name="name">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Buscar</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
  </div>
        </div>
      </div>
  {!! Form::close() !!}
  <div class="container">
  <a href="{{ route('admin.files.create')}}" class="btn btn-primary">Subir Documento</a>
<table class="table table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Nombre</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Contenido</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Tamaño</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Extensión</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Acciones</font></th>
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

</div>





@Endsection
