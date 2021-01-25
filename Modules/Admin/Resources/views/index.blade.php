@extends('admin::layouts.master')
@section('content')
  <section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        <main class="position-relative padding-top-md z-index-1 col-12@md">
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('video::partials.script-js')
@endpush