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

<!-- Users select dropdown -->
          <h3 class="text-md padding-bottom-sm">Scraper for site 1</h4>
          <div class="adv-select js-adv-select">
  <select name="adv-select" id="adv-select">
    <optgroup label="Admins">
      <option value="0" data-option-avatar="adv-custom-select-img-0.svg">Select User</option>
      <option value="1" data-option-avatar="adv-custom-select-img-1.jpg">Olivia Saturday</option>
      <option value="2" data-option-avatar="adv-custom-select-img-2.jpg">David Smith</option>
    </optgroup>

    <optgroup label="Editors">
      <option value="3" data-option-avatar="adv-custom-select-img-3.jpg">Marta Rossi</option>
      <option value="4" data-option-avatar="adv-custom-select-img-4.jpg">Paul Brown</option>
    </optgroup>
  </select>

  <button class="adv-select__control btn btn--subtle is-hidden js-adv-select__control" aria-controls="adv-select-popover-1" aria-haspopup="listbox">
    <span class="js-adv-select__value">
      <!-- dynamically updated with the .adv-select-popover__option content -->
    </span>

    <svg class="icon icon--xxs margin-left-xxs" aria-hidden="true" viewBox="0 0 12 12"><path d="M10.947,3.276A.5.5,0,0,0,10.5,3h-9a.5.5,0,0,0-.4.8l4.5,6a.5.5,0,0,0,.8,0l4.5-6A.5.5,0,0,0,10.947,3.276Z"/></svg>
  </button>
</div>

<div id="adv-select-popover-1" class="adv-select-popover popover bg padding-y-xxs radius-md shadow-md is-hidden js-popover js-adv-select-popover js-tab-focus" role="listbox">
  <div class="adv-select-popover__optgroup" role="group" describedby="optgroup-label">
    <!-- label -->
    <div id="optgroup-label" class="adv-select-popover__label text-sm color-contrast-medium padding-y-xs padding-x-md">{optgroup-label}</div>

    <!-- option -->
    <div class="adv-select-popover__option padding-y-xxs padding-x-md" role="option">
      <div class="flex items-center">
        <img class="width-md height-md radius-50% object-cover margin-right-xxs" src="https://codyhouse.co/app/assets/img/adv-custom-select-img-1.jpg" alt="Profile image">
        <div class="text-truncate">{option-label}</div>
        <svg class="adv-select-popover__check icon icon--xs margin-left-auto" viewBox="0 0 16 16"><polyline stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" points="1,9 5,13 15,3" /></svg>
      </div>
    </div>
  </div>
</div>
<!-- Users select End -->

          <form class="form-template-v3 padding-top-md">
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
    <input class="form-control width-100%" placeholder="class="thumb"">
    </div>

    <div class="margin-bottom-sm margin-top-sm">
    <input class="form-control width-100%" placeholder="Gif Page https://domain.com/gif-animated-hentai-images/">
    </div>

    <div class="margin-bottom-sm margin-top-sm">
    <input class="form-control width-100%" placeholder="Video Page https://domain.com/videos/">
    </div>
  </div>

      <h3 class="text-md padding-top-md">Individual Page Crawl (Level 2)</h4>
      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Title">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Image">

    <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Video">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Artist">

    <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Origins">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Character">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Media">

      <div class="margin-bottom-sm margin-top-md">
    <input class="form-control width-100%" placeholder="Misc">

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
