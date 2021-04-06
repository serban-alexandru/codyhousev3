@extends('users::pages.master')
@section('content')
  @if ($pages_published_count == 0 && $pages_draft_count == 0 && $pages_pending_count == 0 && $pages_deleted_count == 0)
    <section>
      <div class="container max-width-lg margin-top-lg">
        @include('users::pages.no-page')
      </div><!-- /.container -->
    </section>
  @else
    @include('users::pages.sub-nav')
    <section>
      <div class="container max-width-lg margin-top-lg">
        @include('users::pages.notification')
        <div id="site-table-with-pagination-container" class="pages-wrp">
        @include('users::pages.table')
        </div><!-- /#site-table-with-pagination-container -->
        @include('users::pages.add-page')
        @include('users::pages.edit-page')
      </div><!-- /.container -->
    </section>
    @include('users::pages.reject-modal')
  @endif
@endsection

@push('module-scripts')
  <!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::pages.script-js')
@endpush
