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

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios de Capacitación
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Postulación</a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Licitaciones</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cliente1</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Curso1</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Administrativa</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Tecnica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Económica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Oferta</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Dimensión Económica</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Cotizaciones</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                        </ul>
                      </li>
                      <div class="dropdown-divider"></div>
                      <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Curso2</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Administrativa</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Tecnica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Económica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Oferta</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Dimensión Económica</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Cotizaciones</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cliente2</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Curso1</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Administrativa</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Tecnica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Económica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Oferta</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Dimensión Económica</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Cotizaciones</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                        </ul>
                      </li>
                      <div class="dropdown-divider"></div>
                      <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Curso2</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Administrativa</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Tecnica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Económica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Oferta</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Dimensión Económica</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Cotizaciones</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <div class="dropdown-divider"></div>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Convenio Marco</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cliente1</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Curso1</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Administrativa</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Tecnica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Programas</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Económica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Oferta</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Dimensión Económica</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Cotizaciones</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                        </ul>
                      </li>
                      <div class="dropdown-divider"></div>
                      <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Curso2</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Administrativa</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Tecnica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Programas</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Económica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Oferta</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Dimensión Económica</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Cotizaciones</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cliente2</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Curso1</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Administrativa</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Tecnica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Programas</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Económica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Oferta</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Dimensión Económica</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Cotizaciones</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                        </ul>
                      </li>
                      <div class="dropdown-divider"></div>
                      <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Curso2</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Administrativa</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Ingresados</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Tecnica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Documentos Programas</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Económica</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Oferta</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Dimensión Económica</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Cotizaciones</a></li>
                              <div class="dropdown-divider"></div>
                              <li><a class="dropdown-item" href="#">Otros</a></li>
                            </ul>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <div class="dropdown-divider"></div>
              <li><a class="dropdown-item" href="#">Otros</a></li>
            </ul>
          </li>
          <div class="dropdown-divider"></div>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Ejecución Capacitación</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Submenu</a></li>
              <li><a class="dropdown-item" href="#">Submenu0</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Antecedentes Profesionales Empresa
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Certificados Profesionales</a></li>
          <div class="dropdown-divider"></div>
          <li><a class="dropdown-item" href="#">CV Profesionales</a></li>
          <div class="dropdown-divider"></div>
          <li><a class="dropdown-item" href="#">Certificados Empresa</a></li>
          <div class="dropdown-divider"></div>
          <li><a class="dropdown-item" href="#">CV Empresa</a></li>
          <div class="dropdown-divider"></div>
          <li><a class="dropdown-item" href="#">Antecedentes Tributarios Empresa</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios de Consultoría
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">Google</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Submenu</a></li>
              <li><a class="dropdown-item" href="#">Submenu0</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Control Financiero
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Facturas</a></li>
          <div class="dropdown-divider"></div>
          <li><a class="dropdown-item" href="#">Gastos</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

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
