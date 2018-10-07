@extends('admin.template.mainweb')

@section('title', 'Empresa')

@section('h1', ' ')

@section('content')

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Bienvenida</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Historia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">El Modelo de Trabajo</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body"> <p>En mi calidad de socio fundador de la empresa y como parte del equipo que represento, le damos la bienvenida a nuestro página institucional y lo invitamos a revisar nuestra oferta de servicios. Estamos abiertos a generar espacios de posibilidades y conversaciones como una forma de responder a sus necesidades presentes y futuras.</p>

<p>Somos un equipo con amplia experiencia y experticia, con más de veinte años dirigiendo y gestionando organizaciones de salud de alta complejidad.</p>

<p>Los invitamos a contactarnos para tener la oportunidad de conocernos y de proponerles servicios a su medida.</p>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body"> <p>
IGS, fue creada en el año 2002 y fundada por dos profesionales vinculados al mundo de la salud, con el interés y motivación de ocupar un espacio en el ámbito de la consultoría y capacitación en organizaciones de servicios y en particular en organizaciones de salud. Con esta idea se creo el concepto de IGS, Ingeniería, Gestión y Servicios.</p>

<p>En el año 2005, a la luz del inicio de la Reforma de Salud en Chile, IGS intensifica su provisión de servicios en tópicos de gestión relacionados directamente con este proceso.</p>

<p>Hoy IGS ha orientado su quehacer a la prestación de servicios de consultoría en gerenciamiento de organizaciones y tecnologías de salud.</p></div>
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
