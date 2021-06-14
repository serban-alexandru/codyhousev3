@extends('admin::layouts.master')
@section('content')
  @include('tag::partials.modals')
  @include('tag::partials.modals-setting')
  <section>
    <div class="container max-width-lg">
      <div class="grid">
        @include('admin::partials.sidebar')
        <main class="position-relative z-index-1 col-12@md">
          @include('tag::partials.control')
          <div class="margin-top-auto border-top border-contrast-lower"></div><!-- Divider -->
          <div class="padding-sm">
            <div id="site-table-with-pagination-container">
              @include('tag::partials.table')
            </div><!-- /.table-with-pagination-container -->
          </div><!-- /.bg radius-md padding-md shadow-sm -->
        </main><!-- .column -->
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection
@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('tag::partials.script-js')
@endpush