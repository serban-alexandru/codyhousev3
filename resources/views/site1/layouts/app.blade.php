<!doctype html>
  <html lang="en">
  <head>
    <title>@yield('title-tag')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    @yield('in-head')
    <script>
      if('CSS' in window && CSS.supports('color', 'var(--color-var)')) {
        document.write('<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">');
      } else {
        document.write('<link rel="stylesheet" href="{{ asset('assets/css/style-fallback.css') }}">');
      }
    </script>
    
    <noscript>
      <link rel="stylesheet" href="{{ asset('assets/css/style-fallback.css') }}">
    </noscript>
  
  </head>
  <body>
    @include('fonts.external-fonts-v1')

    @include('partials.headers.header-v2')

    @include('forms.signin-modal')

    @yield('content')

    @include('partials.footers.footer-v1')

    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    
    @include('custom-scripts.signin-js')

    @yield('before-end')
  </body>
  </html>
  
