<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Default')</title>


    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/business.css') }}">


  </head>

<body>
  <style CSS>
  .navbar-nav li:hover > ul.dropdown-menu {
display: block;
}
.dropdown-submenu {
position:relative;
}
.dropdown-submenu>.dropdown-menu {
top:0;
left:100%;
margin-top:-6px;
}

/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
text-decoration: underline;
transform: rotate(-90deg);
}
      }
  </style>

  @include('admin.template.partials.navweb')
  <div class="container">
    <section>
      <h1 class="my-4">@yield('h1')</h1>
    </section>
  <section>
    @include('flash::message')
    @include('admin.template.partials.errors')
    @yield('content')
  </section>

  @include('admin.template.partials.footerweb')


  <script src="{{ asset('plugins/bootstrap/js/popper.min.js')}}"></script>
  <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>

  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>




</body>
</html>
