@extends('admin::layouts.master')
@section('content')
  @include('tag::partials.modals')
  @include('tag::partials.modals-setting')
  <section>
    <div class="container max-width-lg">
      <div class="grid">
        @include('admin::partials.sidebar')
        <main class="position-relative z-index-1 col-12@md link-card">
 
                @include('tag::partials.control')
                <div class="margin-top-auto border-top border-contrast-lower"></div><!-- Divider -->
                    <div class="padding-sm">
                    @include('tag::partials.table')

                </div><!-- /.grid -->
            </div><!-- /.table-with-pagination-container -->
        </main><!-- .column and linkcard styling -->
      </div><!-- /.padding -->
    </div><!-- /.container -->
  </section>
@endsection
@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('tag::partials.script-js')
@endpush
