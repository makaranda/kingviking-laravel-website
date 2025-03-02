<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" href="{{ url('assets/img/favicon.ico') }}">
    <title>King Viking | Music Store</title>
        @include('libraries.frontend.styles')
        @stack('css')
        <style>
            .sidebar .nav>.nav-item.active>a p, .nav>.nav-item.active>a p {
                font-weight: 200 !important;
            }
        </style>
    </head>
  <body>
        @include('components.nav')
        <div id="overlay" style="display: block;">
            <div class="loader"></div>
        </div>
        @yield('content')

        @include('components.footer')
        @include('libraries.frontend.scripts')
        @stack('scripts')
  </body>
</html>
