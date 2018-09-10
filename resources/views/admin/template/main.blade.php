<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Default') | Logged: Admin</title>


    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/business.css') }}">


  </head>

<body>
  @include('admin.template.partials.nav')
  <div class="container">
    <section>
      <h1 class="my-4">@yield('h1')</h1>
    </section>
  <section>
    @include('flash::message')
    @include('admin.template.partials.errors')
    @yield('content')
  </section>

  @include('admin.template.partials.footer')


  <script src="{{ asset('plugins/bootstrap/js/popper.min.js')}}"></script>
  <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>

  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>




</body>
</html>
