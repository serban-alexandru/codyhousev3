@extends('admin::layouts.master')
@section('content')
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

<!-- /Sticky -->
  <div class="cs-sticky-menu js-cs-sticky-menu">
    <button class="reset anim-menu-btn radius-50% cs-sticky-menu__trigger js-anim-menu-btn js-tab-focus" style="--anim-menu-btn-icon-size: 24px;" aria-label="Toggle menu" aria-controls="cs-sticky-submenu-id">
      <i class="anim-menu-btn__icon anim-menu-btn__icon--close" aria-hidden="true"></i>
    </button>
  
    <div class="cs-sticky-menu__content">
      <div class="cs-sticky-menu__layout">
        <header class="cs-sticky-menu__header">
          <h2>Menu</h2>
        </header>
        
        <div class="cs-sticky-menu__body">
  
          <div class="cs-sticky-submenu text-sm@md js-cs-sticky-submenu js-autocomplete" id="cs-sticky-submenu-id" data-autocomplete-dropdown-visible-class="cs-sticky-submenu--searching">
            <div class="cs-sticky-submenu__inner js-cs-sticky-submenu__inner">
              <!-- menu -->
              <ul class="cs-sticky-submenu__list js-cs-sticky-submenu__list js-cs-sticky-submenu__list--main">
                <li class="cs-sticky-submenu__search-item">
                  <div class="cs-sticky-submenu__search">
                    <input class="reset cs-sticky-submenu__search-input js-autocomplete__input" type="search" placeholder="Search...">
            
                    <svg class="icon cs-sticky-submenu__search-icon" viewBox="0 0 16 16"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="6.5" cy="6.5" r="4.5" /><line x1="14" y1="14" x2="9.682" y2="9.682" /></g></svg>
                  </div>
                </li>
            
                <li>
                  <button class="reset cs-sticky-submenu__btn js-cs-sticky-submenu__btn--sublist-control">
                    <span>Books</span>
            
                    <svg class="icon icon--xxs margin-left-xxs" viewBox="0 0 12 12"><path d="M10.745,5.564l-8-4.5A.5.5,0,0,0,2,1.5v9a.5.5,0,0,0,.248.432.5.5,0,0,0,.5,0l8-4.5a.5.5,0,0,0,0-.872Z"/></svg>
                  </button>
            
                  <ul class="cs-sticky-submenu__list js-cs-sticky-submenu__list">
                    <li>
                      <button class="reset cs-sticky-submenu__btn js-cs-sticky-submenu__btn--back">
                        <svg class="icon icon--xxs flip-x margin-right-xxs" viewBox="0 0 12 12"><path d="M10.745,5.564l-8-4.5A.5.5,0,0,0,2,1.5v9a.5.5,0,0,0,.248.432.5.5,0,0,0,.5,0l8-4.5a.5.5,0,0,0,0-.872Z"/></svg>
                        <span class="margin-right-auto">Back</span>
                      </button>
                    </li>
            
                    <li><a class="cs-sticky-submenu__link" href="#0">All Books</a></li>
                    <li><a class="cs-sticky-submenu__link" href="#0">Children's Books</a></li>
                    <li><a class="cs-sticky-submenu__link" href="#0">Crime &amp; Mistery</a></li>
  
                    <li>
                      <button class="reset cs-sticky-submenu__btn js-cs-sticky-submenu__btn--sublist-control">
                        <span>Food &amp; Drink</span>
                
                        <svg class="icon icon--xxs margin-left-xxs" viewBox="0 0 12 12"><path d="M10.745,5.564l-8-4.5A.5.5,0,0,0,2,1.5v9a.5.5,0,0,0,.248.432.5.5,0,0,0,.5,0l8-4.5a.5.5,0,0,0,0-.872Z"/></svg>
                      </button>
  
                      <ul class="cs-sticky-submenu__list js-cs-sticky-submenu__list">
                        <li>
                          <button class="reset cs-sticky-submenu__btn js-cs-sticky-submenu__btn--back">
                            <svg class="icon icon--xxs flip-x margin-right-xxs" viewBox="0 0 12 12"><path d="M10.745,5.564l-8-4.5A.5.5,0,0,0,2,1.5v9a.5.5,0,0,0,.248.432.5.5,0,0,0,.5,0l8-4.5a.5.5,0,0,0,0-.872Z"/></svg>
                            <span class="margin-right-auto">Back</span>
                          </button>
                        </li>
  
                        <li><a class="cs-sticky-submenu__link" href="#0">Diets</a></li>
                        <li><a class="cs-sticky-submenu__link" href="#0">Meals &amp; Menus</a></li>
                        <li><a class="cs-sticky-submenu__link" href="#0">Desserts</a></li>
                      </ul>
                    </li>
  
                    <li><a class="cs-sticky-submenu__link" href="#0">History</a></li>
                  </ul>
                </li>
            
                <li>
                  <button class="reset cs-sticky-submenu__btn js-cs-sticky-submenu__btn--sublist-control">
                    <span>Electronics</span>
            
                    <svg class="icon icon--xxs margin-left-xxs" viewBox="0 0 12 12"><path d="M10.745,5.564l-8-4.5A.5.5,0,0,0,2,1.5v9a.5.5,0,0,0,.248.432.5.5,0,0,0,.5,0l8-4.5a.5.5,0,0,0,0-.872Z"/></svg>
                  </button>
  
                  <ul class="cs-sticky-submenu__list js-cs-sticky-submenu__list">
                    <li>
                      <button class="reset cs-sticky-submenu__btn js-cs-sticky-submenu__btn--back">
                        <svg class="icon icon--xxs flip-x margin-right-xxs" viewBox="0 0 12 12"><path d="M10.745,5.564l-8-4.5A.5.5,0,0,0,2,1.5v9a.5.5,0,0,0,.248.432.5.5,0,0,0,.5,0l8-4.5a.5.5,0,0,0,0-.872Z"/></svg>
                        <span class="margin-right-auto">Back</span>
                      </button>
                    </li>
            
                    <li><a class="cs-sticky-submenu__link" href="#0">Camera &amp; Photo</a></li>
                    <li><a class="cs-sticky-submenu__link" href="#0">TV</a></li>
                    <li><a class="cs-sticky-submenu__link" href="#0">Audio</a></li>
                    <li><a class="cs-sticky-submenu__link" href="#0">Headphones</a></li>
                    <li><a class="cs-sticky-submenu__link" href="#0">Phones</a></li>
                    <li><a class="cs-sticky-submenu__link" href="#0">Video Games</a></li>
                  </ul>
                </li>
  
                <li><a class="cs-sticky-submenu__link" href="#0">Home &amp; Garden</a></li>
                <li><a class="cs-sticky-submenu__link" href="#0">Toys</a></li>
                <li><a class="cs-sticky-submenu__link" href="#0">Clothes</a></li>
                <li><a class="cs-sticky-submenu__link" href="#0">Health &amp; Beauty</a></li>
                <li><a class="cs-sticky-submenu__link" href="#0">Car &amp; Motorbike</a></li>
                <li><a class="cs-sticky-submenu__link" href="#0">Sports</a></li>
              </ul>
  
              <!-- search results -->
              <div class="cs-sticky-submenu__search-list js-autocomplete__results">
                <ul id="autocomplete1" class="js-autocomplete__list">
                  <li class="autocomplete__item js-autocomplete__item is-hidden"><a class="cs-sticky-submenu__link" data-autocomplete-url data-autocomplete-label></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
  
        <footer class="cs-sticky-menu__footer">
          <div class="cs-sticky-menu__bottom_items">
            <div class="cs-sticky-menu__bottom_btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <title>face-man</title>
                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(0.5 0.5)"
                  fill="white" stroke="white">
                  <path fill="none" stroke-miterlimit="10"
                    d="M1.051,10.933 C4.239,6.683,9.875,11.542,16,6c3,4.75,6.955,4.996,6.955,4.996"></path>
                  <circle data-stroke="none" fill="white" cx="7.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                    stroke-linecap="square" stroke="none"></circle>
                  <circle data-stroke="none" fill="white" cx="16.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                    stroke-linecap="square" stroke="none"></circle>
                  <circle fill="none" stroke="white" stroke-miterlimit="10" cx="12" cy="12" r="11"></circle>
                </g>
              </svg>
            </div>
            <div class="cs-sticky-menu__bottom_btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <title>face-man</title>
                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(0.5 0.5)"
                  fill="white" stroke="white">
                  <path fill="none" stroke-miterlimit="10"
                    d="M1.051,10.933 C4.239,6.683,9.875,11.542,16,6c3,4.75,6.955,4.996,6.955,4.996"></path>
                  <circle data-stroke="none" fill="white" cx="7.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                    stroke-linecap="square" stroke="none"></circle>
                  <circle data-stroke="none" fill="white" cx="16.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                    stroke-linecap="square" stroke="none"></circle>
                  <circle fill="none" stroke="white" stroke-miterlimit="10" cx="12" cy="12" r="11"></circle>
                </g>
              </svg>
            </div>
            <div class="cs-sticky-menu__bottom_btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <title>face-man</title>
                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(0.5 0.5)"
                  fill="white" stroke="white">
                  <path fill="none" stroke-miterlimit="10"
                    d="M1.051,10.933 C4.239,6.683,9.875,11.542,16,6c3,4.75,6.955,4.996,6.955,4.996"></path>
                  <circle data-stroke="none" fill="white" cx="7.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                    stroke-linecap="square" stroke="none"></circle>
                  <circle data-stroke="none" fill="white" cx="16.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                    stroke-linecap="square" stroke="none"></circle>
                  <circle fill="none" stroke="white" stroke-miterlimit="10" cx="12" cy="12" r="11"></circle>
                </g>
              </svg>
            </div>
            <div class="cs-sticky-menu__bottom_btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <title>face-man</title>
                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(0.5 0.5)"
                  fill="white" stroke="white">
                  <path fill="none" stroke-miterlimit="10"
                    d="M1.051,10.933 C4.239,6.683,9.875,11.542,16,6c3,4.75,6.955,4.996,6.955,4.996"></path>
                  <circle data-stroke="none" fill="white" cx="7.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                    stroke-linecap="square" stroke="none"></circle>
                  <circle data-stroke="none" fill="white" cx="16.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                    stroke-linecap="square" stroke="none"></circle>
                  <circle fill="none" stroke="white" stroke-miterlimit="10" cx="12" cy="12" r="11"></circle>
                </g>
              </svg>
            </div>
          </div>
        </footer>
      </div>
    </div> <!-- .cs-sticky-menu__content -->
  </div> <!-- cs-sticky-menu -->
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('video::partials.script-js')
@endpush