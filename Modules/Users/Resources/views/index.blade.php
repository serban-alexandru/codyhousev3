@extends('admin::layouts.master')
@section('content')
@include('users::partials.modals')
  <section>
    <div class="container max-width-lg">
      <div class="grid">
        @include('admin::partials.sidebar')
        <main class="position-relative z-index-1 col-12@md link-card radius-md">
                @include('users::partials.control')
                <div class="margin-top-auto border-top border-contrast-lower"></div><!-- Divider -->
                    <div class="padding-sm">
                    @include('users::partials.table')
                </div><!-- /.grid -->
            </div><!-- /.table-with-pagination-container -->
        </main><!-- .column and linkcard styling -->
      </div><!-- /.padding -->
    </div><!-- /.container -->
  </section>
@endsection
@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::partials.script-js')
@endpush
