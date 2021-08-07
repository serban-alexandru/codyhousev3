@extends('admin::layouts.master')
@section('content')
  <section>
    <div class="container max-width-lg">
      <div class="grid">
        @include('admin::partials.sidebar')
        <main class="position-relative z-index-1 col-12@md link-card radius-md">
        @include('admin::scraper.control')
          <div class="margin-top-auto border-top border-contrast-lower"></div><!-- Divider -->
          <div class="padding-md">
          <form class="form-template-v3">
  <fieldset class="margin-bottom-md padding-bottom-md">
    <div class="text-component margin-bottom-md text-left">
      <h2>Contact us.</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>

    <div class="margin-bottom-xs">
      <div class="grid gap-xxs items-left@md">
        <div class="col-2@md">
          <label class="form-label" for="firstName">First name</label>
        </div>
        
        <div class="col-8@md">
          <input class="form-control width-100%" type="text" name="firstName" id="firstName" required>
        </div>
      </div>
    </div>

    <div class="margin-bottom-xs">
      <div class="grid gap-xxs items-left@md">
        <div class="col-2@md">
          <label class="form-label" for="lastName">Last name</label>
        </div>
        
        <div class="col-8@md">
          <input class="form-control width-100%" type="text" name="lastName" id="lastName" required>
        </div>
      </div>
    </div>

    <div class="margin-bottom-xs">
      <div class="grid gap-xxs items-left@md">
        <div class="col-2@md">
          <label class="form-label" for="inputEmail">Email</label>
        </div>
        
        <div class="col-8@md">
          <input class="form-control width-100%" type="email" name="inputEmail" id="inputEmail" required>
        </div>
      </div>
    </div>

    <div>
      <div class="grid gap-xxs items-left@md">
        <div class="col-2@md">
          <label class="form-label" for="textarea">Textarea</label>
          <p class="text-xs color-contrast-medium margin-top-xxxxs">Optional</p>
        </div>
        
        <div class="col-8@md">
          <textarea class="form-control width-100%" name="textarea" id="textarea"></textarea>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="margin-top-auto border-top border-contrast-lower"></div><!-- Divider -->
  <div class="text-right">
    <button class="btn btn--primary">Submit</button>
  </div>
</form>
            </div>
        </main><!-- .column -->
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::partials.script-js')
@endpush
