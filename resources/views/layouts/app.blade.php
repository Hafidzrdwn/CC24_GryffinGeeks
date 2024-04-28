<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <title>Merah Putih - @yield('title')</title>
  </head>
  <body>
  @include('partials.navbar')
    <div class="container pt-5">
        @yield('content')
    </div>
    <script src="{{ asset('jquery/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://kit.fontawesome.com/2e160f1ac0.js" crossorigin="anonymous"></script>
  </body>
</html>