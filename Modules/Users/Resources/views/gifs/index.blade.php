@extends('templates.layouts.index')
@section('content')
  @if ($gifs_published_count == 0 && $gifs_draft_count == 0 && $gifs_pending_count == 0 && $gifs_deleted_count == 0)
    <section>
      <div class="container max-width-lg margin-top-lg">
        @include('users::gifs.no-gif')
      </div><!-- /.container -->
    </section>
  @else
    @include('users::gifs.sub-nav')
    <section>
      <div class="container max-width-lg margin-top-lg">
        @include('users::gifs.notification')
        <div id="site-table-with-pagination-container" class="gifs-wrp">
        @include('users::gifs.table')
        </div><!-- /#site-table-with-pagination-container -->
        @include('users::gifs.add-gif')
        @include('users::gifs.edit-gif')
      </div><!-- /.container -->
    </section>
    @include('users::gifs.reject-modal')
  @endif
@endsection

@push('module-scripts')
  <!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::gifs.script-js')
@endpush
