@extends('admin::layouts.master')
@section('content')
  @include('page::partials.modals')
  @include('page::partials.edit-modals')
  @include('page::partials.reject-modal')
  <section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        @include('page::partials.sidebar')
        <main class="position-relative padding-top-md z-index-1 col-12@md">
          @include('page::partials.control')
          <div id="site-table-with-pagination-container">
            @include('page::partials.table')
          </div><!-- /#site-table-with-pagination-container -->
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('page::partials.script-js')
@endpush
