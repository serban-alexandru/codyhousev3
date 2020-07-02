  @include('site1.header.header')
  @include('site1.header.signin-modal')
  @yield('content')
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  @include('site1.header.signin-js')
