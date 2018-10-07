@extends('admin.template.mainweb')

@section('title', 'Empresa')

@section('h1', ' ')

@section('content')

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">¿Cómo nos diferenciamos?</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Mercado Objetivo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cartera de Clientes</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body"> <p>
        Nuestras prácticas centran su orientación en el acompañamiento en los ámbitos de la gestión de organizaciones y profesionales, vinculados al mundo de la salud, con fuerte énfasis en gestión de su atención: en el escuchar y en la pulcritud del cumplimiento de los compromisos contraídos con nuestros clientes.</p>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body"> <p>

        Nuestra orientación y quehacer va dirigido a organizaciones y profesionales de la salud.</p>

<p>Entendemos a las organizaciones de la salud como aquellas vinculadas a la provisión de servicios de salud, en los ámbitos de atención cerrada y abierta y de servicios vinculados con el apoyo clínico y logístico y gestión de usuarios, y a los profesionales vinculados a los procesos médicos, gestión de cuidados, de apoyo clínico, de apoyo logístico y de gestión de usuarios.</p>

      </div>
    </div>
  </div>


  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body"> <p>
    La ejecución de los servicios que presta IGS se basa, aplica y conjuga el Modelo de Trabajo siguiente:</p>
<ul class="list-unstyled"><li>
  <ul>
<li><b> Mirada Sistémica:</b> Aborda la problemática en forma integrada con un enfoque desde lo global a lo particular, permitiendo visualizar e identificar las diferentes variables del problema.<br /><br /></li>

<li><b> Mirada Operacional:</b> Centrado en las acciones y tareas que generan la problemática, concibiendo a la organización como una red de relaciones y actividades.<br /><br /></li>

<li><b> Orientación al Client:</b> Enfocada en la satisfacción de sus necesidades y expectativas.<br /><br /></li>

<li><b> Las Personas:</b> Con un equipo de trabajo de profesionales especializados y de larga experiencia en las diferentes áreas de la cartera de servicios de la empresa, evaluando constantemente su desempeño, generando relaciones de largo plazo con nuestros clientes, nuestros profesionales y nuestros proveedores. Y atentos a las expectativas y satisfacción de las personas que trabajan con nuestros clientes, como factor clave de éxito y permanencia en el tiempo.<br /><br /></li>

<li><b> Aplicación de la Tecnológica:</b> Aplicando la tecnología disponible, de acuerdo a los recursos disponibles.<br /><br /></li>

<li><b> Alianzas:</b> Estableciendo y gestionando alianzas con otras empresas para dar respuesta a un servicio integral.<br /><br /></li>

<li><b> Innovación:</b> Aprovechando las oportunidades de innovación y mejora de nuevos servicios (productos) y/o procesos orientados al cliente, como elemento clave de la competitividad, emprendimiento y de la creatividad.</ul></li></ul></div>
</div>
</div>



@Endsection
