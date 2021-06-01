@extends('admin::layouts.master')
@section('content')
<section>
  <div class="container max-width-adaptive-sm margin-top-lg">
    <div class="postbox-container link-card radius-md">
      <form action="{{ route('postbox.store') }}" id="formPostBox" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="grid">
          <!-- Post box -->
          <div class="postbox">
            <?php
            if($alert = session()->get('alert')) {
              $type = $alert['type'];
            } else {
              $type = 'post';
            }
            ?>
            @include('postbox.templates.'.$type)
          </div>

          <!-- Content type selections -->
          <div class="border-top border-contrast-lower"></div>
          <div class="box-footer">
            <menu class="menu-bar menu-bar--expanded@md js-menu-bar margin-xs">
              <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
                <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                  <circle cx="8" cy="7.5" r="1.5" />
                  <circle cx="1.5" cy="7.5" r="1.5" />
                  <circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </li>

              <li class="menu-bar__item btn-load-box {{ $type == 'post' ? 'menu-bar-control--active' : '' }}" role="menuitem" box-type="post">
                <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 12 12">
                  <path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path>
                </svg>
                <span class="menu-bar__label">Create Post</span>
              </li>

              <li class="menu-bar__item btn-load-box {{ $type == 'page' ? 'menu-bar-control--active' : '' }}" role="menuitem" box-type='page'>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>file</title><g fill="#000000"><path d="M14,0H3A1,1,0,0,0,2,1V23a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V8H15a1,1,0,0,1-1-1Z" fill="#000000"></path><polygon points="21.414 6 16 6 16 0.586 21.414 6"></polygon></g></svg>
                <span class="menu-bar__label">Create Page</span>
              </li>
            </menu>
            <div class="buttons margin-xs">
              <button id="btnSave" class="btn btn--primary margin-right-xs">Save</button>
              <button id="btnPublish" class="btn btn--primary">Publish</button>
            </div>
          </div>
        </div><!-- /.grid -->
      </form>
    </div>
  </div><!-- /.container -->
</section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('postbox.scripts.script-js')
@endpush
