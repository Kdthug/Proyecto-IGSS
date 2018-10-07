@extends('admin.template.mainweb')

@section('title', 'Empresa')

@section('h1', ' ')

@section('content')

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">¿Qué Hacemos?</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Organizacionales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Profesionales</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body"> <p>Proveemos servicios de consultoría, capacitación y acompañamiento, en gestión de calidad y procesos, gerenciamiento tecnológico y administración de organizaciones de salud.</p>

      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body"> <p><b>
        Administración de Organizaciones de Salud:</b></p>
      <ul class="list-unstyled"><li>
      <ul>
      <li>Gestión Estratégica.</li>
      <li>Gestión de Personas.</li>
      <li>Diseño Organizacional.</li>
      <li>Gestión Financiera.</li>
      <li>Gestión Comercial.</li>
      <li>Formulación, Evaluación y Gestión de Proyectos.</li>
      <li>Gestión de la Producción.</li>
      <li>Gestión Logística.</li>
      <li>Gestión Informática.</ul></li></ul></div>

      <div class="card-body"> <p><b>
        Gestión de Calidad y de Procesos de Organizaciones de Salud:</b></p>
      <ul class="list-unstyled"><li>
      <ul>
      <li>Gestión de Calidad.</li>
      <li>Gestión de Procesos.</li>
      <li>Acreditación de Prestadores Institucionales.</ul></li></ul></div>

      <div class="card-body"> <p><b>
        Gerenciamiento de Tecnologías de Salud:</b></p>
      <ul class="list-unstyled"><li>
      <ul>
      <li>Planificación</li>
      <li>Gestión de Personas.</li>
      <li>Adquisición.</li>
      <li>Gestión de Tecnologías.</li>
      <li>Gestión de la Calidad.</li>
      <li>Gestión de Riesgos.</ul></li></ul></div>

      <div class="card-body"> <p><b>
        Cursos de Capacitación:</b></p>
      <ul class="list-unstyled"><li>
      <ul>
      <li>Acreditación en Salud.</li>
      <li>Calidad de Servicio y Satisfacción Usuaria.</li>
      <li>Formulación y Evaluación de Proyectos.</li>
      <li>Liderazgo y Comunicación.</li>
      <li>Planificación Estratégica.</li>
      <li>Autogestión en Red.</li>
      <li>Gestión de Centros de Responsabilidad.</li>
      <li>Competencias en Mejoramiento Continuo.</li>
      <li>Optimización de Procesos.</li>
      <li>Gestión de Procesos.</li>
      <li>Construcción y Seguimiento de Indicadores.</li>
      <li>Gestión de Costos.</li>
      <li>Taller de Negociación.</li>
      <li>Reingeniería de Procesos.</li>
      <li>Cuadro de Mando Integral (CMI): BSC.</li>
      <li>Control de Gestión.</li>
      <li>Gestión Directiva.</li>
      <li>Gestión Organizaciones de Salud. </li>
      <li>Gestión de Calidad.</li>
      <li>Diseño Organizacional.</li>
      <li>Dirección de Equipos de Alto Desempeño.</li>
      <li>Evaluación del Desempeño Humano.</li>
      <li>Mejoramiento de las RRLL y Trabajo en Equipo.</li>
      <li>Mejoramiento del Ausentismo.</li>
      <li>Trabajo en Equipo de Alto Desempeño.</li>
      <li>Seguridad Electromédica.</li>
      <li>Gerenciamiento de Tecnologías de Salud.</li>
      <li>Planificación Estratégica Tecnológica.</li>
      <li>Adquisición de Tecnologías de Salud.</li>
      <li>Gestión de Calidad de Tecnologías de Salud.</li>
      <li>Gestión de Riesgos de Tecnologías de Salud.</li>
      <li>Bioinstrumentación I: Medicina Física.</li>
      <li>Bioinstrumentación II: Neonatología.</li>
      <li>Bioinstrumentación III: Signos Vitales.</li>
      <li>Bioinstrumentación IV: Ventilación.</li>
      <li>Bioinstrumentación V: Imagenología 1.</li>
      <li>Bioinstrumentación VI: Imagenología 2.</li>
      <li>Bioinstrumentación VII: Imagenología 3.</li>
      <li>Bioinstrumentación VIII: Radioterapia.</li>
      <li>Bioinstrumentación IX: Laboratorio Clínico.</li>
      <li>Bioinstrumentación X: Cirugía.</ul></li></ul></div>



      </div>
      </div>


  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body">
      <ul class="list-unstyled"><li>
      <ul>
      <li>Gestión del Negocio / Consulta Profesional.</li>
      <li>Gestión Financiera Personal.</li>
      <li>Formulación y Evaluación Económica y Gestión de Proyectos.</li>
      <li>Gerenciamiento de Tecnologías de Salud.</li>
      <li>Coaching.</ul></li></ul></div>

</div>
</div>



@Endsection
