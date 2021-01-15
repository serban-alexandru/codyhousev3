@extends('users::dashboard.master')
@section('content')
  @include('users::dashboard.modals')
  @include('users::dashboard.edit-modals')
  <section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        @include('users::dashboard.sidebar')
        <main class="position-relative padding-top-md z-index-1 col-12@md">
          @include('users::dashboard.control')
          <div class="bg radius-md padding-md shadow-sm">
            <div id="site-table-with-pagination-container">
              @include('users::dashboard.table')
            </div><!-- /#site-table-with-pagination-container -->
          </div><!-- /.bg radius-md padding-md shadow-sm -->
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::dashboard.script-js')
@endpush
