@extends('site1.layouts.app')
@section('content')
@include('admin::partials.admin-bar')
  @include('users::partials.modals')
  <section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        @include('users::partials.sidebar')
        <main class="position-relative padding-top-md z-index-1 col-12@md">
          @include('users::partials.control')
          <div class="bg radius-md padding-md shadow-sm">
            <div id="site-table-with-pagination-container">
              @include('users::partials.table')
            </div><!-- /#site-table-with-pagination-container -->
          </div><!-- /.bg radius-md padding-md shadow-sm -->
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::partials.script-js')
@endpush