<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" type="image/jpeg" href="{{ url('public/assets/images/'.$settings['fevicon_logo']) }}"/>
    <title>{{ $settings['website_title'] }}</title>
        @include('libraries.frontend.styles')
        @stack('css')
        <style>
            .sidebar .nav>.nav-item.active>a p, .nav>.nav-item.active>a p {
                font-weight: 200 !important;
            }
            .header-area {
                top: {{ Auth::check() ? '60px' : '0px' }};
            }
            .bg-dark {
                background-color: #000000 !important;
            }
            .nav-md-block{
              display: block !important;
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
