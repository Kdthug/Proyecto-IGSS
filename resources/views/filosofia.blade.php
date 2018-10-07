@extends('admin.template.mainweb')

@section('title', 'Empresa')

@section('h1', ' ')

@section('content')

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Misión</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Visión</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Valores y Principios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-sello-tab" data-toggle="pill" href="#pills-sello" role="tab" aria-controls="pills-sello" aria-selected="false">Nuestro Sello</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body"> <p>
        Proveer servicios de consultoría y asistencia técnica, en el ámbito de la administración, gestión e ingeniería de servicios, a organizaciones públicas y privadas y a personas, nacionales e internacionales, del área de la salud.</p>

      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body"> <p>
        Queremos posicionarnos como un referente experto en la gestión de calidad, procesos, tecnología y administración, de organizaciones de salud y de consultoría a profesionales vinculados a los servicios de salud.</p>

      </div>
    </div>
  </div>


  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="card border-primary mb-3" style="max-width: 45rem;">
      <div class="card-body">
<ul class="list-unstyled"><li>
  <ul>
<li><b> Compromiso:</b> Más que una obligación contraída o a una palabra dada, consideramos al compromiso como la esencia y estilo para coordinar acciones con otros, que dice relación con establecer la base para producir posibilidades y nuevas interpretaciones. Es nuestra manera de pensar para hacer que nuestros compromisos generen una nueva realidad para nuestros clientes.<br /><br /></li>

<li><b> Profesionalismo:</b> Nuestras prácticas, comportamientos, conocimientos y actitudes se rijan por el respeto, la prudencia, la objetividad y la efectividad en la ejecución de las actividades realizadas.<br /><br /></li>

<li><b> Integridad:</b> En el ámbito empresarial y personal, nuestra conducta se rige por códigos de ética que la sociedad acepta como "correcta" o "buena".<br /><br /></li>

<li><b> Alto Desempeño:</b> Nuestra identidad se caracteriza y se define respecto a nuestro sentido (significación y dirección), es decir, nuestra visión compartida como equipo, su elaboración y ajuste continúo a la visión de la empresa, constantemente actualizada en función de la interacción con el medio y evolución de la realidad circundante. Cuyas prácticas se traducen en una auto elaboración, dedicación personal, total aceptación de los demás y respuesta al contexto con la capacidad del equipo para compartir el liderazgo.</ul></li></ul></div>


</div>
</div>

<div class="tab-pane fade" id="pills-sello" role="tabpanel" aria-labelledby="pills-sello-tab">
  <div class="card border-primary mb-3" style="max-width: 45rem;">
    <div class="card-body"> <p>
      Se caracteriza por una orientación al cliente con profesionalismo y excelencia en la prestación de los servicios que proveemos. Entendemos al profesionalismo como las prácticas, comportamientos, conocimientos y actitudes que se rigen por el respeto, la mesura, la objetividad y la efectividad en la ejecución de las actividades efectuadas y la excelencia como la satisfacción de nuestros clientes a los servicios prestados.</p>

    </div>
  </div>
</div>



@Endsection
