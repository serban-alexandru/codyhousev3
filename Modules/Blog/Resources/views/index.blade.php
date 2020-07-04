@extends('admin::layouts.master')
@section('content')
@include('blog::partials.blog-nav')
<section>
    <div class="container max-width-lg">
      <div class="grid gap-md@md">
        @include('blog::partials.sidebar')
        <main class="position-relative padding-top-md z-index-1 col-12@md">
          <div id="site-table-with-pagination-container">
            @include('blog::partials.table')
          </div><!-- /#site-table-with-pagination-container -->
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection