@extends('admin::layouts.master')
@section('content')
  <section>
    <div class="container max-width-lg margin-top-xs">
        <h1>Site Settings</h1>
        <form>
            <fieldset class="margin-bottom-md margin-top-md">
                
              <div class="floating-label margin-bottom-md">
                <label class="form-label" for="inputName">Enter Site Title</label>
                <input class="form-control width-100%" type="text" name="inputName" id="inputName" placeholder="Enter Site Title">
              </div>

              <div class="floating-label margin-bottom-md">
                <label class="form-label" for="textarea">Paste your Logo SVG</label>
                <textarea class="form-control width-100%" name="textarea" id="textarea" placeholder="Paste your Logo SVG"></textarea>
              </div>

              <div class="floating-label margin-bottom-md">
                <label class="form-label" for="textarea">Paste your favicon SVG</label>
                <textarea class="form-control width-100%" name="textarea" id="textarea" placeholder="Paste your favicon SVG"></textarea>
              </div>

              <h1>SEO Settings</h1>

              <div class="floating-label margin-bottom-md margin-top-md">
                <label class="form-label" for="inputName">Index Page Title</label>
                <input class="form-control width-100%" type="text" name="inputName" id="inputName" placeholder="Index Page Title">
              </div>

              <div class="floating-label margin-bottom-md margin-top-xs">
                <label class="form-label" for="inputName">Tag Page Title</label>
                <input class="form-control width-100%" type="text" name="inputName" id="inputName" placeholder="Tag Page Title">
              </div>

            </fieldset>
          </form>
  </section>
@endsection
