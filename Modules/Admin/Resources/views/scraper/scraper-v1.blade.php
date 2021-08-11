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

    <h3 class="text-md padding-bottom-sm">Index Crawl (Level 1)</h4>

      <div class="margin-bottom-sm">
    <div class="grid gap-xs">
      <div class="col-6@md">

        <input class="form-control width-100%" type="text" name="input-first-name" id="input-first-name" placeholder="https://domain.com/page/2641/?new">
      </div>

      <div class="col-6@md padding-top-xxs padding-left-md">
      <input class="radio" type="radio" name="radioButton" id="radio1" checked>
            <label for="radio1">Backward</label>

          <input class="radio" type="radio" name="radioButton" id="radio2">
            <label for="radio2">Forward</label>
      </div>

      <div class="margin-bottom-sm margin-top-sm">
    <input class="form-control width-100%" placeholder="Find any page with this">
    </div>
  </div>

      <h3 class="text-md padding-top-md">Individual Page Crawl (Level 2)</h4>
      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Title">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Image">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Origin">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Character">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Tags">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Type">

      <h3 class="text-md padding-top-md">Next Page Crawl (Level 3)</h4>
      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="<title> Title </title>">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Example: https://domain.com/wp-content/uploads/">

  </div>
    </div>
  </fieldset>

  <div class="text-right">
    <button class="btn btn--subtle margin-right-sm">Save</button><button class="btn btn--primary">Scrape</button>
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
