@extends('templates.layouts.index')
@section('content')
  @if ($posts_published_count == 0 && $posts_draft_count == 0 && $posts_pending_count == 0 && $posts_deleted_count == 0)
    <section>
      <div class="container max-width-lg margin-top-lg">
        @include('users::dashboard.no-post')
      </div><!-- /.container -->
    </section>
  @else
    @include('users::dashboard.sub-nav')
    <section>
      <div class="container max-width-lg margin-top-lg">
        @include('users::dashboard.notification')
        <div id="site-table-with-pagination-container" class="posts-wrp">
        @include('users::dashboard.table')
        </div><!-- /#site-table-with-pagination-container -->
        @include('users::dashboard.add-post')
        @include('users::dashboard.edit-post')
      </div><!-- /.container -->
    </section>
    @include('users::dashboard.reject-modal')
  @endif
@endsection

@push('module-scripts')
  <!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::dashboard.script-js')
@endpush
