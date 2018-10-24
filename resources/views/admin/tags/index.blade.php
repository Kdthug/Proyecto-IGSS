@extends('admin.template.main')

@section('title', 'Index Tags')

@section('h1', 'Index Tags')

@section('content')

{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form-right']) !!}
<div class="container">



  <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>

                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Buscar Tag" name="name">
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

  {!! Form::close() !!}
  <a href="{{ route('admin.tags.create')}}" class="btn btn-primary">Crear Tag</a>
<table class="table table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">ID</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Nombre</font></th>
      <th style="background-color:#4CAF50" scope="col"><font color="#FDFEFE">Acción</font></th>
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
