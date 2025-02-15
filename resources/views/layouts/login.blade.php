<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">
    <title>Billing System | Login</title>
        @include('libraries.login.styles')
        @stack('css')
    </head>
  <body>

        @yield('content')

        @include('libraries.login.scripts')

  </body>
</html>
