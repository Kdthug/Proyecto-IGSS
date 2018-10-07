@extends('admin.template.mainweb')

@section('title', 'Home')

@section('h1', 'Home ')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                  @if(Auth::user()->hasRole('admin', 'client', 'editor'))
                    <div>Acceso autorizado</div><br/><br/>
                    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Administrador</h5>

        <a href="{{ route('admin.users.index')}}" class="btn btn-primary">Comenzar</a>
      </div>
    </div>
  </div>
  <div class="card-body">
    @elseif(Auth::user()->hasRole('editor'))
      <div>Acceso autorizado</div><br/><br/>
      <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Editor</h5>

        <a href="{{ route('editor.index')}}" class="btn btn-primary">Comenzar</a>
      </div>
    </div>
  </div>
  <div class="card-body">
    @elseif(Auth::user()->hasRole('client'))
      <div>Acceso autorizado</div><br/><br/>
      <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cliente</h5>

        <a href="{{ route('client.index')}}" class="btn btn-primary">Comenzar</a>
      </div>
    </div>
  </div>
</div>
                      @else
                      <div>Acceso denegado, su permiso aun no ha sido autorizado</div>
                      @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
