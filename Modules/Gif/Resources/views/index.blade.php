@extends('admin::layouts.master')
@section('content')
  @include('gif::partials.modals')
  @include('gif::partials.edit-modals')
  @include('gif::partials.reject-modal')
  <section>
    <div class="container max-width-lg">
      <div class="grid">
        @include('admin::partials.sidebar')
        <main class="position-relative z-index-1 col-12@md link-card radius-md">
          <div id="site-table-with-pagination-container">
            @include('gif::partials.control')
            <div class="margin-top-auto border-top border-contrast-lower"></div><!-- Divider -->
            <div class="padding-sm">
              @include('gif::partials.table')
            </div><!-- Padding -->
          </div><!-- /#site-table-with-pagination-container -->
        </main><!-- .column -->
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('gif::partials.script-js')
@endpush
