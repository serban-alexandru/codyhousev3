@extends('admin::layouts.master')
@section('content')
<div class="container max-width-lg">
  <div class="grid">
    @include('admin::partials.sidebar')
    <main class="position-relative z-index-1 col-12">
        <div id="site-table-with-pagination-container">
            @include('admin::partials.postbox')
        </div>
    </main>
  </div><!-- /.grid -->
</div><!-- /.container -->
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('postbox.scripts.script-js')
@endpush
