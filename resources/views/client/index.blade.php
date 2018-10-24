@extends('admin.template.maineditor')

@section('title', 'Index Documentos')

@section('h1', 'Index Documentos')

@section('content')



{!! Form::open(['route' => 'client.index', 'method' => 'GET', 'class' => 'navbar-form-right']) !!}
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
  {!! Form::close() !!}
<table class="table table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">ID</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Nombre</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Tamaño</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Extensión</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Acciones</font></th>
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
