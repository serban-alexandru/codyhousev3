@extends('admin::layouts.master')
@include('article::partials.modals')
@include('article::partials.alert-modal')
@section('content')
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
<script src="js/medium-editor.js"></script>
