@extends('admin::layouts.master')
@section('content')
  @include('post::partials.modals')
  @include('post::partials.edit-modals')
  @include('post::partials.reject-modal')
  <section>
    <div class="container max-width-lg">
      <div class="grid">
        @include('admin::partials.sidebar')
        <main class="position-relative z-index-1 col-12@md link-card radius-md">
            <div id="site-table-with-pagination-container">
                @include('post::partials.control')
                <div class="margin-top-auto border-top border-contrast-lower"></div><!-- Divider -->
                    <div class="padding-sm">
                    @include('post::partials.table')
                    </div><!-- Padding -->
                </div>
            </div><!-- /#site-table-with-pagination-container -->
        </main><!-- .column -->
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('post::partials.script-js')
@endpush
