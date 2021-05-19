<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="current-url" content="{{ url()->full() }}">

  <!-- favicon 👇 -->
  <link rel="icon" type="image/svg+xml" href="{{ !empty($settings_data['favicon']) ? asset($settings_data['favicon']) : asset('assets/img/favicon.svg') }}">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <script>
    if('CSS' in window && CSS.supports('color', 'var(--color-var)')) {
      document.write('<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">');
    } else {
      document.write('<link rel="stylesheet" href="{{ asset('assets/css/style-fallback.css') }}">');
    }
  </script>

  <noscript>
    <link rel="stylesheet" href="{{ asset('assets/css/style-fallback.css') }}">
  </noscript>

  <title>Admin</title>

  @include('partials.external-fonts-v1')

</head>
<body>

  @include('admin::partials.main-header-v2')
  @yield('content')
  @include('partials.footers.footer')

  <!-- CODYHOUSE, LIBRARIES -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>

  <!-- COMMON SCRIPTS -->
  @include('admin::partials.custom-script')

  <!-- MODULE SCRIPTS -->
  @stack('module-scripts')

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
</body>
</html>