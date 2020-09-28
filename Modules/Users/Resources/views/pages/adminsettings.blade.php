@extends('admin::layouts.master')
@section('content')
<section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        <main class="position-relative padding-top-md z-index-1 col-12@md">
          <div class="bg radius-md padding-md shadow-sm">

            <form>
                <fieldset class="margin-bottom-md">
                  <h3 class="margin-bottom-sm">Avatar Size</h3>
              
                  <div class="grid gap-sm">
                    <div class="col-6@md">
                      <input class="form-control width-100%" type="email" name="input-email" id="input-email" placeholder="Enter width">
                    </div>
                
                    <div class="col-6@md">
                      <input class="form-control width-100%" type="email" name="input-email" id="input-email" placeholder="Enter Height">
                    </div>
              
                </fieldset>
              
                <div>
                  <button class="btn btn--primary margin-top-xxl">Save</button>
                </div>
              </form>
              
          </div><!-- /.bg radius-md padding-md shadow-sm -->
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection
@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::partials.script-js')
@endpush