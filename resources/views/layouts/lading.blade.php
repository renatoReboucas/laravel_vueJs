<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>Lading Page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <link href="{{ asset('/resources/vendor/css/vendor.css') }}" rel="stylesheet">
     <link href="{{ asset('/resources/css/lading.css') }}" rel="stylesheet">

    {{-- <link rel="stylesheet" type="text/css" href="resources/vendor/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css"> --}}
  </head>
  <body>
  @auth
  @endauth
<div class="content">
    <script src="https://kit.fontawesome.com/3931c7733f.js" crossorigin="anonymous"></script>
    <script async src="{{ asset('/resources/vendor/js/vendor.js') }}"></script>
  {{-- <script async type="text/javascript" src="resources/vendor/js/vendor.js"></script> --}}
  @yield('content')
  @yield('script')
</div>
  </body>
</html>
