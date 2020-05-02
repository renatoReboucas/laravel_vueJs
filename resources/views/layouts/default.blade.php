<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resources/vendor/css/vendor.css">
    <link rel="stylesheet" href="resources/css/style.css">
  </head>
  <body>
  @auth
  @endauth
<div class="content">
  <script async type="text/javascript" src="resources/vendor/js/vendor.js"></script>
  @yield('content')
  @yield('script')
</div>
  </body>
</html>
