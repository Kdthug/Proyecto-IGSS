
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienvenido a IGSS</title>

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/business.css') }}">

  </head>

  <body>



    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="images/logo-bellatrix.png" width="150" height="80" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">Conocenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                <a class="dropdown-item" href="{{ route('register') }}">Registrate</a>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://cdn-images-1.medium.com/max/2000/1*R1vpugRFPDu8sd4gBRz5Mg.jpeg')">
            <div class="carousel-caption d-none d-md-block bg-primary">
              <h3>Ingeniería</h3>
              <p>IGS provee, realiza, desarrolla y ejecuta ingeniería como respuesta a la identificación y dimensión del problema que afecta al cliente</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://destinonegocio.com/wp-content/uploads/2015/10/ico-destinonegocio-gestion-de-ventas-istock-getty-images-e1444404853885-1030x686.jpg')">
            <div class="carousel-caption d-none d-md-block bg-primary">
              <h3>Gestión</h3>
              <p>IGS provee los servicios requeridos, a través de transferencia tecnológica y conocimientos que implican el apoyo, consultoría</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://www.hyperlinkit.com/images/services.jpeg')">
            <div class="carousel-caption d-none d-md-block bg-primary">
              <h3>Servicios</h3>
              <p>	IGS provee y define sus servicios en los ámbitos de la capacitación, consultoría, apoyo y soporte, como respuesta a las necesidades del cliente</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Bienvenido a IGSS</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Empresa</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Leer Más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Filosofía</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Leer Más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Servicios</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Leer Más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Clientes</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Leer Más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Socios Estratégicos</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Leer Más</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>DESTACADOS</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/aarriola.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Bienvenida</a>
              </h4>
              <p class="card-text">En mi calidad de socio fundador de la empresa y como parte del equipo que represento, le damos la bienvenida a nuestro página institucional y lo invitamos a revisar nuestra oferta de servicios. Estamos abiertos a generar espacios de posibilidades y conversaciones como una forma de responder a sus necesidades presentes y futuras.</p>

              <p class="card-text">Somos un equipo con amplia experiencia y experticia, con más de veinte años dirigiendo y gestionando organizaciones de salud de alta complejidad.</p>

              <p class="card-text">Los invitamos a contactarnos para tener la oportunidad de conocernos y de proponerles servicios a su medida.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/images.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Novedades</a>
              </h4>
              <p class="card-text">Hemos formulado la Cartera de Cursos  a ofrecer durante el año 2013, los cuales se explicitan a continuación:</p>
              
            </div>
          </div>
        </div>

      <!-- /.row -->

      <!-- Features Section -->


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-light">
      <div class="container">
        <p class="m-0 text-center text-black">IGS Salud - Ingeniería, Gestión, Servicios y Salud.
Bellavista 108, Agua Santa, Viña del Mar
Celular: 93372069 - contacto@igss.cl</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

  </body>

</html>
