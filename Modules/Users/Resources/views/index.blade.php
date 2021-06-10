@extends('admin::layouts.master')
@section('content')
  @include('users::partials.modals')
  <section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid">
        @include('admin::partials.sidebar')
        <main class="position-relative padding-top-md z-index-1 col-12@md">
          @include('users::partials.index')
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::partials.script-js')
@endpush