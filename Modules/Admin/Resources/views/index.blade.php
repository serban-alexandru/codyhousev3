@extends('admin::layouts.master')
@section('content')
  <section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        @include('video::partials.sidebar')
        <main class="position-relative padding-top-md z-index-1 col-12@md">
          <div class="bg radius-md padding-md shadow-sm">
              @include('admin::partials.table')
          </div><!-- /.bg radius-md padding-md shadow-sm -->
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('video::partials.script-js')
@endpush