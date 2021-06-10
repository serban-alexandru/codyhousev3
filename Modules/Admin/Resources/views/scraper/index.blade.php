@extends('admin::layouts.master')
@section('content')
  @include('video::partials.modals')
  <section>
    <div class="container max-width-xs margin-top-lg">
        <a class="link-card flex flex-column bg radius-md" href="#0" aria-label="Link label">
            <div class="padding-md">

              <div class="margin-bottom-md">
                Settings (IPs randomize)
              </div>

              <!-- /Repeater -->
              <div class="js-repeater" data-repeater-input-name="user[n]">
                <ul class="grid gap-xs js-repeater__list">
                  <li class="js-repeater__item">
                    <div class="grid gap-xs">
                      <input class="form-control col" type="text" placeholder="Add IP">
                      <input class="form-control col" type="text" placeholder="Port">
                      <button class="btn btn--subtle padding-x-xs col-content js-repeater__remove" type="button">
                        <svg class="icon" viewBox="0 0 20 20">
                          <title>Remove item</title>
              
                          <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <line x1="1" y1="5" x2="19" y2="5"/>
                            <path d="M7,5V2A1,1,0,0,1,8,1h4a1,1,0,0,1,1,1V5"/>
                            <path d="M16,8l-.835,9.181A2,2,0,0,1,13.174,19H6.826a2,2,0,0,1-1.991-1.819L4,8"/>
                          </g>
                        </svg>
                      </button>
                    </div>
                  </li>
                </ul>
              
                <button class="text-sm btn btn--subtle width-15% margin-top-xs js-repeater__add" type="button">Add IP</button>
              </div>

              <div class="margin-bottom-sm margin-top-lg">
                Delays (Default from 5s - 15s)
              </div>
                    <div class="input-merger form-control width-100% grid margin-bottom-sm">
                    <input type="text" class="reset input-merger__input min-width-0 col" name="userName" id="userName" placeholder="From">
                    <input type="email" class="reset input-merger__input min-width-0 col" name="userEmail" id="userEmail" placeholder="To">
                </div>
            </div>

            <div class="margin-top-auto border-top border-contrast-lower">
                <p class="text-sm btn btn--primary margin-md">Save</p>
              </div>
          </a>
    </div><!-- /.container -->
    


    <div class="container max-width-xs margin-top-md">
        <a class="link-card flex flex-column bg radius-md" href="#0" aria-label="Link label">
            <div class="padding-md">
                Log
            </div>
            <div class="margin-top-auto border-top border-contrast-lower">
              <p class="text-sm btn btn--primary margin-md">Start</p>
            </div>
          </a>
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('video::partials.script-js')
@endpush