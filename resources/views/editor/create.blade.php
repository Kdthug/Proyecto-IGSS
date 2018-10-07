@extends('admin.template.maineditor')

@section('title', 'Subir Documento')

@section('h1', 'Subir Documento')

@section('content')

<form action="{{ route('admin.files.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<input type="file" name="file" required>
<button class="btn btn-primary" type="submit">Subir</button>
</form>

@endsection
