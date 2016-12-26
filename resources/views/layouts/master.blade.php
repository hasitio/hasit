<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="{{ URL::asset('js/html5shiv.min.js') }}"></script>
      <script src="{{ URL::asset('js/respond.min.js') }}"></script>
    <![endif]-->
    @yield('head')
  </head>
  <body>
    @yield('content')
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    @yield('footer')
  </body>
</html>