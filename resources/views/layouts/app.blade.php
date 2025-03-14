<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" href="{{ url('assets/img/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="{{ $settings['website_title'] }} | Dashboard" />
    <meta name="author" content="Makaranda Pathirana" />
	  <title>{{ $settings['website_title'] }} | Dashboard</title>
        @include('libraries.app.styles')
        @stack('css')
        <style>
            .sidebar .nav>.nav-item.active>a p, .nav>.nav-item.active>a p {
                font-weight: 200 !important;
            }
        </style>
    </head>
    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
      <div class="app-wrapper">
        @include('components.dashboard-nav')
          <main class="app-main">
            <div id="overlay" style="display: block;">
                <div class="loader"></div>
            </div>
            @yield('content')
          </main>
            @include('components.dashboard-footer')
            @include('libraries.app.scripts')
            @stack('scripts')
             
           
      </div>
  </body>
</html>
