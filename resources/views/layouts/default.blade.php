<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resources/vendor/css/vendor.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
  @auth
  @endauth
<div class="content">
  <script async type="text/javascript" src="resources/vendor/js/vendor.js"></script>
  <script async src="{{ asset('js/app.js') }}" defer></script>
  @yield('content')
  @yield('script')
</div>
  </body>
</html>
