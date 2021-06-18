@extends('admin::layouts.master')
@section('content')
  @include('gif::partials.modals')
  @include('gif::partials.edit-modals')
  @include('gif::partials.reject-modal')
  <section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        @include('gif::partials.sidebar')
        <main class="position-relative padding-top-md z-index-1 col-12@md">
            <div id="site-table-with-pagination-container">
            @include('gif::partials.control')
            @include('gif::partials.table')
          </div><!-- /#site-table-with-pagination-container -->
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('gif::partials.script-js')
@endpush
