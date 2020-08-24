<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="current-url" content="{{ url()->full() }}">

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

  <title>Title</title>

  @include('admin::partials.external-fonts')

</head>
<body>

  @include('site1.partials.header')
  @include('admin::partials.admin-bar')
  @yield('content')
  @include('admin::partials.footer')

  <!-- CODYHOUSE, LIBRARIES -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>

  <!-- COMMON SCRIPTS -->
  @include('admin::partials.custom-script')

  <!-- MODULE SCRIPTS -->
  @stack('module-scripts')
</body>
</html>