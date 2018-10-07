@extends('admin.template.main')

@section('title', 'Subir Documento')

@section('h1', 'Subir Documento')

@section('content')



<form action="{{ route('admin.files.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
<input type="file" name="file" required>
</div>
<div class="form-group">
  {!! Form::label('description', 'Descripción') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descripción del Documento']) !!}
</div>
<div class="form-group">
  {!! Form::label('tags', 'Tags') !!}
  {!! Form::select('tags', $tags, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Tag', 'required']) !!}
</div>
<div class="form-group">
<button class="btn btn-primary" type="submit">Subir</button>
</div>
</form>

@endsection
