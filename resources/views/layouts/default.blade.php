<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="{{ asset('/resources/vendor/css/vendor.css') }}" rel="stylesheet">
     <link href="{{ asset('/resources/css/style.css') }}" rel="stylesheet">
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
