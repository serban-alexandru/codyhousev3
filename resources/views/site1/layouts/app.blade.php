<!doctype html>
  <html lang="en">
  <head>
    <title>{{config('app.name', 'Curateship')}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
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
    @include('site1.partials.external-fonts')

    @include('site1.partials.header')

    @include('site1.partials.signin-modal')

    @yield('content')

    @include('site1.partials.footer')

    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    
    @include('site1.partials.signin-js')
  </body>
  </html>
  