@extends('admin::layouts.master')
@section('content')
  <section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        <main class="position-relative padding-top-md z-index-1 col-10@md">

          <!-- Post box -->
          <a class="link-card flex flex-column bg radius-md" href="#0" aria-label="Link label">
            <div class="padding-md">
              <div class="flex flex-wrap gap-xs items-center">
                <figure>
                  <svg class="block color-primary" width="72" height="72" viewBox="0 0 72 72">
                    <circle fill="currentColor" opacity="0.15" cx="36" cy="36" r="36"/>
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                      <path d="M45,49h6V43.562a2,2,0,0,0-1.515-1.941l-5.833-1.458a1,1,0,0,1-.747-.829l-.412-2.881A6,6,0,0,0,46,31V28.252A6.167,6.167,0,0,0,40.185,22,5.973,5.973,0,0,0,37,22.8"/><path d="M39.549,43.586l-4.925-1.408a1,1,0,0,1-.716-.82l-.415-2.9S37.219,38.734,39,37a10.227,10.227,0,0,1-2-6.738,6.185,6.185,0,0,0-5.761-6.257,6,6,0,0,0-6.234,5.756c0,.08,0,.159,0,.239a10.45,10.45,0,0,1-2,7c1.781,1.734,5.507,1.453,5.507,1.453l-.415,2.9a1,1,0,0,1-.716.82l-4.925,1.408A2,2,0,0,0,21,45.509V49H41V45.509A2,2,0,0,0,39.549,43.586Z"/>
                    </g>
                  </svg>
                </figure>
          
                <div class="line-height-xs">
                  <p class="text-lg font-semibold color-contrast-higher">1,354</p>
                  <p class="color-contrast-medium margin-top-xxxs">Users</p>
                </div>
              </div>
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
            
              <li class="menu-bar__item menu-bar__item--hide" role="menuitem">
                <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 12 12">
                  <path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path>
                </svg>
                <span class="menu-bar__label">Edit</span>
              </li>
            
              <li class="menu-bar__item menu-bar__item--hide" role="menuitem">
                <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                  <path d="M2,6v8c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V6H2z"></path>
                  <path d="M12,3V1c0-0.6-0.4-1-1-1H5C4.4,0,4,0.4,4,1v2H0v2h16V3H12z M10,3H6V2h4V3z"></path>
                </svg>
                <span class="menu-bar__label">Delete</span>
              </li>
            
              <li class="menu-bar__item menu-bar__item--hide" role="menuitem">
                <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                  <path d="M15.707,0.293c-0.273-0.272-0.68-0.365-1.043-0.234l-14,5C0.287,5.193,0.026,5.54,0.002,5.939 c-0.024,0.4,0.192,0.775,0.551,0.955l4.586,2.292L11,5l-4.187,5.862l2.292,4.586C9.276,15.787,9.623,16,10,16 c0.021,0,0.041-0.001,0.061-0.002c0.4-0.024,0.747-0.284,0.882-0.662l5-14C16.072,0.973,15.98,0.566,15.707,0.293z"></path>
                </svg>
                <span class="menu-bar__label">Send</span>
              </li>
            
              <li class="menu-bar__item menu-bar__item--hide" role="menuitem">
                <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                  <path d="M8,12c0.3,0,0.5-0.1,0.7-0.3L14.4,6L13,4.6l-4,4V0H7v8.6l-4-4L1.6,6l5.7,5.7C7.5,11.9,7.7,12,8,12z"></path>
                  <rect x="1" y="14" width="14" height="2"></rect>
                </svg>
                <span class="menu-bar__label">Download</span>
              </li>
            
              <li class="menu-bar__item " role="menuitem">
                <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">><g>
                    <path d="M14.7,1.3c-0.4-0.4-1-0.4-1.4,0L8,6.6L2.7,1.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4L6.6,8l-5.3,5.3 c-0.4,0.4-0.4,1,0,1.4C1.5,14.9,1.7,15,2,15s0.5-0.1,0.7-0.3L8,9.4l5.3,5.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L9.4,8l5.3-5.3C15.1,2.3,15.1,1.7,14.7,1.3z"></path>
                  </g></svg>
                <span class="menu-bar__label">Close</span>
              </li>
            
            </menu>

          </a>

        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('video::partials.script-js')
@endpush