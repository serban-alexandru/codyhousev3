@extends('site1.layouts.app')
@section('content')
  <div class="container max-width-lg">
    <div class="grid gap-md@md">
      @include('site1.partials.usersidebar')
      <main class="position-relative padding-top-md z-index-1 col-12@md">
          @include('site1.partials.control')
          @include('site1.partials.table')
        </div><!-- /#site-table-with-pagination-container -->
      </main>
    </div><!-- /.grid -->
  </div><!-- /.container -->
</section>
@endsection