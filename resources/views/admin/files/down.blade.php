@extends('admin.template.main')

@section('title', 'Index Documentos')

@section('h1', 'Index Documentos')

@section('content')



<table class="table table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>

      <th scope="col">Documento</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($files as $file)
      <tr>
        <td>{{ $file->id }}</td>

        <td>{{ $file->name }}</td>
        <td><a href="/documents/articles/{{$file->name}}" download="{{ $file->name }}">
          <button type="button" class="btn btn-primary">
            <i class="glyphicon glyphicon-download">Descargar</i></button>
        </a>
        </td>


      </tr>
    @endforeach
  </tbody>
</table>




@Endsection
