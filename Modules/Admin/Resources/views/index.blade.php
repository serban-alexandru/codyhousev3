@extends('admin::layouts.master')
@section('content')
<fieldset>
  <legend class="form-legend margin-bottom-sm">Select contact options:</legend>

  <ul class="choice-tags flex flex-wrap gap-xxs js-choice-tags">
    <li>
      <label class="choice-tag choice-tag--checkbox text-sm js-choice-tag" for="checkbox-tag-phone-call">
        <input class="sr-only" type="checkbox" id="checkbox-tag-phone-call" checked>
  
        <svg class="choice-tag__icon icon margin-right-xxs" viewBox="0 0 16 16" aria-hidden="true"><g class="choice-tag__icon-group" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"><line x1="-6" y1="8" x2="8" y2="8" /><line x1="8" y1="8" x2="22" y2="8"/><line x1="8" y1="2" x2="8" y2="14"/></g></svg>
      </label>
    </li>

  </ul>
</fieldset>
<!-- Tag modal Start -->

  <section>
    <div class="container max-width-adaptive-sm margin-top-lg">
      <div class="grid gap-md@md">

          <!-- Post box -->
          <a class="link-card flex flex-column bg radius-md" href="#0" aria-label="Link label">
            <div class="padding-sm">
              <div class="flex flex-wrap gap-xs items-center">
          
                <div class="line-height-xs">
                  
                  <h3 class="text-left">Create Post</h3>
                  <div class="file-upload inline-block">
                    <label for="upload2" class="file-upload__label btn btn--primary">
                      <span class="flex items-center">
                        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="2"><path  stroke-linecap="square" stroke-linejoin="miter" d="M2 16v6h20v-6"></path><path stroke-linejoin="miter" stroke-linecap="butt" d="M12 17V2"></path><path stroke-linecap="square" stroke-linejoin="miter" d="M18 8l-6-6-6 6"></path></g></svg>
                        
                        <span class="margin-left-xxs file-upload__text file-upload__text--has-max-width">Add Image</span>
                      </span>
                    </label> 
                  
                    <input type="file" class="file-upload__input" name="upload2" id="upload2" multiple>
                  </div>
                </div>
              </div>
            </div>
            <div class="border-top border-contrast-lower"></div>
            <p class="text-center margin-xxxl">Post box goes here</p>

            <!-- Content type selections -->
            <div class="border-top border-contrast-lower"></div>
            <menu class="menu-bar menu-bar--expanded@md js-menu-bar margin-xs">
              <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
                <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                  <circle cx="8" cy="7.5" r="1.5" />
                  <circle cx="1.5" cy="7.5" r="1.5" />
                  <circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </li>
            
              <li class="menu-bar__item" role="menuitem">
                <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 12 12">
                  <path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path>
                </svg>
                <span class="menu-bar__label">Create Post</span>
              </li>
            
              <li class="menu-bar__item" role="menuitem">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>file</title><g fill="#000000"><path d="M14,0H3A1,1,0,0,0,2,1V23a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V8H15a1,1,0,0,1-1-1Z" fill="#000000"></path><polygon points="21.414 6 16 6 16 0.586 21.414 6"></polygon></g></svg>
                <span class="menu-bar__label">Create Page</span>
              </li>    

              <button class="btn btn--primary margin-right-xs">Save</button>
              <button class="btn btn--primary">Publish</button>
            
            </menu>
          </a>

      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('video::partials.script-js')
@endpush