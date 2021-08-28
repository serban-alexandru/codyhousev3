@extends('admin::layouts.master')
@section('content')
  <section>
    <div class="container max-width-lg">
      <div class="grid">
        @include('admin::partials.sidebar')
        <main class="position-relative z-index-1 col-12@md link-card radius-md">
        @include('admin::scraper.control')
        <div class="margin-top-auto border-top border-contrast-lower"></div><!-- Divider -->
        <div class="flex justify-between">
  <div class="margin-xs">
  <h3 class="text-md padding-xxs">Scraper for site 1</h3>
  </div>

  <!-- Menu Bar -->
  <div class="flex flex-wrap items-center justify-between margin-right-xxs">
    <div class="flex flex-wrap">
      <li class="menu-bar__item js-menu-bar">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>button-pause</title><g fill="#000000"><path fill="#000000" d="M6.25 1.25h-3.75c-0.75 0-1.25 0.5-1.25 1.25v15c0 0.75 0.5 1.25 1.25 1.25h3.75c0.75 0 1.25-0.5 1.25-1.25v-15c0-0.75-0.5-1.25-1.25-1.25z"></path><path fill="#000000" d="M17.5 1.25h-3.75c-0.75 0-1.25 0.5-1.25 1.25v15c0 0.75 0.5 1.25 1.25 1.25h3.75c0.75 0 1.25-0.5 1.25-1.25v-15c0-0.75-0.5-1.25-1.25-1.25z"></path></g></svg>
        <span class="menu-bar__label">Pause and Continue</span>
      </li>

      <li class="menu-bar__item">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>shape-oval</title><g fill="#000000"><path fill="#000000" d="M9.98 0a9.98 9.98 0 1 0 0 19.97 9.98 9.98 0 1 0 0-19.97z"></path></g></svg>
        <span class="menu-bar__label">Stop</span>
      </li>

      <li class="menu-bar__item">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>trash</title><g fill="#000000"><path d="M18.48 2.94h-5.16l-0.74-2.23a0.42 0.42 0 0 0-0.4-0.29h-4.2a0.42 0.42 0 0 0-0.4 0.29l-0.74 2.23h-5.16a0.42 0.42 0 0 0-0.42 0.42v1.26a0.42 0.42 0 0 0 0.42 0.42h16.8a0.42 0.42 0 0 0 0.42-0.42v-1.26a0.42 0.42 0 0 0-0.42-0.42z"></path><path d="M16.8 5.88h-13.44v11.76a2.1 2.1 0 0 0 2.1 2.1h9.24a2.1 2.1 0 0 0 2.1-2.1z m-9.66 10.08a0.42 0.42 0 0 1-0.84 0v-6.3a0.42 0.42 0 0 1 0.84 0z m3.36 0a0.42 0.42 0 0 1-0.84 0v-6.3a0.42 0.42 0 0 1 0.84 0z m3.36 0a0.42 0.42 0 0 1-0.84 0v-6.3a0.42 0.42 0 0 1 0.84 0z" fill="#000000"></path></g></svg>
        </a>
        <span class="menu-bar__label">Trash</span>
      </li>

      <li class="menu-bar__item">
      <a href="{{ url('admin/scraper/scraper-v1') }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>privacy-settings</title><g fill="#000000"><path d="M17.32 11.17a6.9 6.9 0 0 0 0-2.42l1.75-1.68a0.83 0.83 0 0 0 0.14-1.01l-1.25-2.16a0.84 0.84 0 0 0-0.95-0.38l-2.32 0.66a7.48 7.48 0 0 0-2.1-1.2l-0.58-2.35a0.83 0.83 0 0 0-0.8-0.63h-2.49a0.83 0.83 0 0 0-0.81 0.63l-0.59 2.35a7.49 7.49 0 0 0-2.09 1.2l-2.32-0.66a0.84 0.84 0 0 0-0.95 0.38l-1.25 2.16a0.83 0.83 0 0 0 0.14 1.01l1.75 1.68a7.62 7.62 0 0 0-0.11 1.21 7.53 7.53 0 0 0 0.11 1.21l-1.75 1.68a0.83 0.83 0 0 0-0.14 1.01l1.25 2.16a0.83 0.83 0 0 0 0.72 0.41 0.85 0.85 0 0 0 0.22-0.03l2.33-0.66a7.49 7.49 0 0 0 2.1 1.2l0.58 2.35a0.83 0.83 0 0 0 0.81 0.63h2.49a0.83 0.83 0 0 0 0.8-0.63l0.59-2.35a7.49 7.49 0 0 0 2.09-1.2l2.33 0.66a0.85 0.85 0 0 0 0.22 0.03 0.83 0.83 0 0 0 0.72-0.41l1.25-2.16a0.83 0.83 0 0 0-0.14-1.01z m-6.53 0.3v1.81h-1.66v-1.81a2.49 2.49 0 1 1 1.66 0z" fill="#000000"></path></g></svg>
        </a>
        <span class="menu-bar__label">Settings</span>
      </li>

      </li>

      </div> <!-- end of <div class="int-table-actions" data-table-controls="table-1"> -->
    </div>
  </div> <!-- end of <div class="flex flex-wrap items-center justify-between margin-right-xxs"> -->
  <h4 class="text-md padding-sm">Logs</h4>
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
