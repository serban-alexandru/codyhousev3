@extends('admin::layouts.master')
@section('content')
<section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        @include('post::partials.sidebar')
        <main class="position-relative padding-top-md z-index-1 col-12@md">
          <div class="bg radius-md padding-md shadow-sm">

            <form>
                <fieldset class="margin-bottom-md">
                  <legend class="form-legend">Form Legend</legend>
              
                  <div class="grid gap-sm">
                    <div class="col-6@md">
                      <label class="form-label margin-bottom-xxs" for="input-name">Name</label>
                      <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>
                    </div>
                
                    <div class="col-6@md">
                      <label class="form-label margin-bottom-xxs" for="input-email">Email</label>
                      <input class="form-control width-100%" type="email" name="input-email" id="input-email" placeholder="email@myemail.com">
                    </div>
              
                    <div>
                      <label class="form-label margin-bottom-xxs" for="input-invalid">Invalid</label>
                      <input class="form-control width-100%" type="text" name="input-invalid" id="input-invalid" aria-invalid="true" value="invalid data">
                      <div role="alert" class="bg-accent bg-opacity-20% padding-xs radius-md text-sm color-contrast-higher margin-top-xxs"><p><strong>Error:</strong> this is an error message</p></div>
                    </div>
                    
                    <div>
                      <label class="form-label margin-bottom-xxs" for="textarea">Textarea</label>
                      <textarea class="form-control width-100%" name="textarea" id="textarea"></textarea>
                      <p class="text-xs color-contrast-medium margin-top-xxs">Use helper text to provide additional information.</p>
                    </div>
                  </div>
                </fieldset>
              
                <fieldset class="margin-bottom-md">
                  <legend class="form-legend">Radio Buttons</legend>
              
                  <ul class="flex flex-column gap-xxxs">
                    <li>
                      <input class="radio" type="radio" name="radio-buttons" id="radio-1" checked>
                      <label for="radio-1">Choice 1</label>
                    </li>
              
                    <li>
                      <input class="radio" type="radio" name="radio-buttons" id="radio-2">
                      <label for="radio-2">Choice 2</label>
                    </li>
                  </ul>
                </fieldset>
              
                <fieldset class="margin-bottom-md">
                  <legend class="form-legend">Checkboxes</legend>
              
                  <div class="flex flex-wrap gap-md">
                    <div>
                      <input class="checkbox" type="checkbox" id="checkbox-1">
                      <label for="checkbox-1">Option 1</label>
                    </div>
              
                    <div>
                      <input class="checkbox" type="checkbox" id="checkbox-2">
                      <label for="checkbox-2">Option 2</label>
                    </div>
                  </div>
                </fieldset>
              
                <div>
                  <button class="btn btn--primary">Submit</button>
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
  @include('post::partials.script-js')
@endpush