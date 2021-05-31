@extends('admin::layouts.master')
@section('content')
<section>
  <div class="container max-width-adaptive-sm margin-top-lg">
  @if($alert = session()->get('alert'))
    <div class="alert alert--is-visible js-alert margin-bottom-lg {{ $alert['class'] }}" role="alert">
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <svg aria-hidden="true" class="icon margin-right-xxxs" viewBox="0 0 32 32" ><title>info icon</title><g><path d="M16,0C7.178,0,0,7.178,0,16s7.178,16,16,16s16-7.178,16-16S24.822,0,16,0z M18,7c1.105,0,2,0.895,2,2 s-0.895,2-2,2s-2-0.895-2-2S16.895,7,18,7z M19.763,24.046C17.944,24.762,17.413,25,16.245,25c-0.954,0-1.696-0.233-2.225-0.698 c-1.045-0.92-0.869-2.248-0.542-3.608l0.984-3.483c0.19-0.717,0.575-2.182,0.036-2.696c-0.539-0.514-1.794-0.189-2.524,0.083 l0.263-1.073c1.054-0.429,2.386-0.954,3.523-0.954c1.71,0,2.961,0.855,2.961,2.469c0,0.151-0.018,0.417-0.053,0.799 c-0.066,0.701-0.086,0.655-1.178,4.521c-0.122,0.425-0.311,1.328-0.311,1.765c0,1.683,1.957,1.267,2.847,0.847L19.763,24.046z"></path></g></svg>
          <div>
            {!! $alert['message'] !!}
          </div>
        </div>

        <button class="reset alert__close-btn js-alert__close-btn">
          <svg class="icon" viewBox="0 0 24 24"><title>Close alert</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="19" y1="5" x2="5" y2="19"></line><line fill="none" x1="19" y1="19" x2="5" y2="5"></line></g></svg>
        </button>
      </div>
    </div><!-- /.alert -->
  @endif    
    <form action="{{ route('postbox.store') }}" id="formPostBox" method="POST" enctype="multipart/form-data" >
      @csrf
      <div class="grid gap-md@md">
        <!-- Post box -->
        <div class="postbox">
          @if($alert = session()->get('alert'))
            @include('postbox.templates.'.$alert["type"])
          @else
            @include('postbox.templates.post')
          @endif
        </div>

        <!-- Content type selections -->
        <div class="border-top border-contrast-lower"></div>
        <menu class="menu-bar menu-bar--expanded@md js-menu-bar margin-xs">
          <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
            <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
              <circle cx="8" cy="7.5" r="1.5" />
              <circle cx="1.5" cy="7.5" r="1.5" />
              <circle cx="14.5" cy="7.5" r="1.5" /></svg>
          </li>

          <li class="menu-bar__item btn-load-box" role="menuitem" box-type="post">
            <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 12 12">
              <path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path>
            </svg>
            <span class="menu-bar__label">Create Post</span>
          </li>

          <li class="menu-bar__item btn-load-box" role="menuitem" box-type='page'>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>file</title><g fill="#000000"><path d="M14,0H3A1,1,0,0,0,2,1V23a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V8H15a1,1,0,0,1-1-1Z" fill="#000000"></path><polygon points="21.414 6 16 6 16 0.586 21.414 6"></polygon></g></svg>
            <span class="menu-bar__label">Create Page</span>
          </li>    

          <button id="btnSave" class="btn btn--primary margin-right-xs">Save</button>
          <button id="btnPublish" class="btn btn--primary">Publish</button>
        </menu>
      </div><!-- /.grid -->
    </form>
  </div><!-- /.container -->
</section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('postbox.scripts.script-js')
@endpush
