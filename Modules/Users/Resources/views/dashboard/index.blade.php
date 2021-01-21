@extends('users::dashboard.master')
@section('content')
  <section>
    <div class="container max-width-lg margin-top-lg">
     
          <div class="bg radius-md padding-md shadow-sm">
            @include('users::dashboard.notification')
            <div id="site-table-with-pagination-container">
              @include('users::dashboard.table')
            </div><!-- /#site-table-with-pagination-container -->
            @include('users::dashboard.add-post')
            @include('users::dashboard.edit-post')
          </div><!-- /.bg radius-md padding-md shadow-sm -->

    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::dashboard.script-js')
@endpush
