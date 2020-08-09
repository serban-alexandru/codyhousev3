@extends('admin::layouts.master')
@section('content')
@include('article::partials.modals')
@include('article::partials.alert-modal')
  <div class="container max-width-lg">
    <div class="grid gap-md@md">
      @include('article::partials.sidebar')
      <main class="position-relative padding-top-md z-index-1 col-12@md">
          @include('article::partials.control')
          @include('article::partials.table')
        </div><!-- /#site-table-with-pagination-container -->
      </main>
    </div><!-- /.grid -->
  </div><!-- /.container -->
</section>
@endsection
