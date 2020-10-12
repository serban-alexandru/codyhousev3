<header class="mega-nav mega-nav--mobile mega-nav--desktop@md position-relative js-mega-nav hide-nav js-hide-nav js-hide-nav--main">
  <div class="mega-nav__container">
    <!-- 👇 logo -->

    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
    width="30pt" height="30pt" viewBox="0 0 800.000000 798.000000"
    preserveAspectRatio="xMidYMid meet">

   <g transform="translate(0.000000,798.000000) scale(0.100000,-0.100000)"
   fill="#2a79fd" stroke="yes">
   <path d="M3710 7973 c-212 -16 -497 -62 -696 -113 -960 -245 -1794 -838 -2351
   -1670 -275 -411 -487 -921 -583 -1399 -66 -332 -85 -548 -77 -904 10 -453 71
   -798 219 -1226 465 -1346 1648 -2358 3058 -2615 167 -30 260 -41 260 -30 0 14
   140 1217 145 1249 4 26 15 36 72 64 174 85 365 246 489 410 78 104 165 275
   198 392 76 266 56 562 -53 794 -35 75 -100 187 -101 174 0 -4 7 -26 16 -50 11
   -28 18 -90 21 -174 12 -316 -66 -572 -265 -870 -227 -339 -601 -545 -1063
   -585 -280 -25 -622 39 -883 164 -205 98 -411 263 -506 405 -48 71 -117 214
   -125 258 -5 27 -1 31 257 175 l262 146 46 -81 c131 -234 282 -387 470 -476
   143 -68 271 -84 432 -56 301 52 599 242 692 440 102 217 14 477 -222 656 -134
   101 -322 181 -576 245 -245 61 -362 106 -489 191 -307 204 -461 534 -444 953
   4 105 11 155 31 225 36 122 111 274 187 376 191 259 459 416 820 481 118 21
   150 22 697 23 565 0 573 0 577 20 2 11 9 88 15 170 28 375 102 871 170 1141
   41 160 95 311 138 379 98 157 362 409 551 526 28 18 50 34 48 35 -2 2 -74 21
   -160 43 -335 85 -645 122 -1001 119 -127 -1 -251 -3 -276 -5z"/>
   <path d="M5735 7280 c-322 -51 -533 -261 -599 -595 -12 -59 -126 -1083 -126
   -1128 0 -4 225 -7 500 -7 l500 0 0 -295 0 -295 -539 0 c-342 0 -542 -4 -546
   -10 -3 -5 -42 -317 -86 -692 -43 -376 -97 -836 -119 -1023 -22 -187 -110 -938
   -195 -1670 -85 -731 -160 -1370 -165 -1420 -6 -50 -12 -102 -15 -117 -4 -27
   -3 -28 38 -28 23 0 104 9 179 20 633 90 1225 325 1747 693 318 224 651 546
   882 852 439 581 699 1232 791 1975 8 67 13 227 13 440 0 351 -6 427 -51 690
   -164 960 -678 1821 -1456 2445 -117 93 -166 115 -352 150 -99 20 -319 27 -401
   15z"/>
   <path d="M2948 4944 c-239 -43 -398 -187 -444 -403 -37 -176 4 -302 141 -437
   165 -162 468 -309 897 -434 166 -49 306 -106 370 -151 16 -12 31 -19 33 -17 2
   2 40 314 85 693 44 380 83 707 86 728 l6 37 -549 -1 c-423 -1 -566 -4 -625
   -15z"/>
   </g>
   </svg>
    <a href="{{ url('/') }}" class="mega-nav__logo">
      <h2 class="logo padding-sm">SaigonFinest</h2>
    </a>
    
    <!-- 👇 icon buttons --mobile -->
    <div class="mega-nav__icon-btns mega-nav__icon-btns--mobile">
      @guest
      <a href="#0" class="mega-nav__icon-btn js-signin-modal-trigger" data-signin="login">
        <svg class="icon" viewBox="0 0 24 24" class="js-signin-modal-trigger" data-signin="login">
          <title>Login</title>
          <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
            <circle cx="12" cy="6" r="4" />
            <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
          </g>
        </svg>
      </a>
      @endguest
      @auth
      <div class="dropdown js-dropdown">
        <div class="mega-nav__icon-btn dropdown__wrapper inline-block">
            @if(Auth::user()->getMedia('avatars')->last())
            <div class="author author--minimal-mobile dropdown__trigger">
              <a href="#0" class="author__img-wrapper">
                <img src="{{ Auth::user()->getMedia('avatars')->last()->getFullUrl('thumb') }}" alt="Author picture">
            </div>
            @else
              <svg class="icon" viewBox="0 0 24 24">
                <title>Go to account settings</title>
                <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                  <circle cx="12" cy="6" r="4" />
                  <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
                </g>
              </svg>
            @endif
          </a>

          <ul class="dropdown__menu" aria-label="submenu">
            <li><a href="{{ url('profile') }}" class="dropdown__item">Profile</a></li>
            <li class="dropdown__separator" role="separator"></li>
            <li><a href="{{ url('users/settings') }}" class="dropdown__item">Account Settings</a></li>
            <li><a href="{{ url('/logout') }}" class="dropdown__item">Log out</a></li>
          </ul>
        </div><!-- /.mega-nav__icon-btn dropdown__wrapper inline-block -->
      </div><!-- /.dropdown js-dropdown -->
      @endauth

      <button class="reset mega-nav__icon-btn mega-nav__icon-btn--search js-tab-focus" aria-label="Toggle search" aria-controls="mega-nav-search">
        <svg class="icon" viewBox="0 0 24 24">
          <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
            <path d="M4.222 4.222l15.556 15.556" />
            <path d="M19.778 4.222L4.222 19.778" />
            <circle cx="9.5" cy="9.5" r="6.5" />
          </g>
        </svg>
      </button>

      @auth
        @include('site1.partials.notification')
      @endauth

      <button class="reset mega-nav__icon-btn mega-nav__icon-btn--menu js-tab-focus" aria-label="Toggle menu" aria-controls="mega-nav-navigation">
        <svg class="icon" viewBox="0 0 24 24">
          <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
            <path d="M1 6h22" />
            <path d="M1 12h22" />
            <path d="M1 18h22" />
          </g>
        </svg>
      </button>
    </div>

    <div class="mega-nav__nav js-mega-nav__nav" id="mega-nav-navigation" role="navigation" aria-label="Main">
      <div class="mega-nav__nav-inner">
        <ul class="mega-nav__items">
          <!-- 👇 layout 2 -> multiple lists -->
          <li class="mega-nav__item js-mega-nav__item">
            <button class="reset mega-nav__control js-mega-nav__control js-tab-focus">
              Browse
              <i class="mega-nav__arrow-icon" aria-hidden="true">
                <svg class="icon" viewBox="0 0 16 16">
                  <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                    <path d="M2 2l12 12" />
                    <path d="M14 2L2 14" />
                  </g>
                </svg>
              </i>
            </button>

            <div class="mega-nav__sub-nav-wrapper">
              <div class="mega-nav__sub-nav mega-nav__sub-nav--layout-2">
                <ul class="mega-nav__sub-items">
                  <li class="mega-nav__label">Magazine Sites</li>
                  <li class="mega-nav__sub-item"><a href="http://127.0.0.1:8000/site1" class="mega-nav__sub-link">Site 1</a></li>
                </ul>

                <ul class="mega-nav__sub-items">
                  <li class="mega-nav__label">Blog Sites</li>
                  <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Shoes</a></li>
                </ul>

                <ul class="mega-nav__sub-items">
                  <li class="mega-nav__label">Social Networks Sites</li>
                  <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Shoes</a></li>
                </ul>

                <div class="mega-nav__card width-100% max-width-xs margin-x-auto">
                  <a href="#0" class="block radius-lg overflow-hidden">
                    <figure class="media-wrapper media-wrapper--4:3">
                      <img class="block width-100%" src="{{ asset('assets/img/mega-site-nav-img-1.jpg') }}" alt="Image description">
                    </figure>
                  </a>

                  <div class="margin-top-sm">
                    <h3 class="text-base"><a href="#0" class="mega-nav__card-title">Browse all →</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- 👇 link -->
          <li class="mega-nav__item">
            <a href="#" class="mega-nav__control">About us</a>
          </li>
          <li class="mega-nav__item">
            <a href="{{ url('admin') }}" class="mega-nav__control">Admin</a>
          </li>
        </ul>
        
        <ul class="mega-nav__items js-main-nav custom-mega-nav__items-mobile">
          <!-- 👇 icon buttons --desktop -->
          <li class="mega-nav__icon-btns mega-nav__icon-btns--desktop">
            @guest
            <div class="mega-nav__icon-btn dropdown__wrapper inline-block js-signin-modal-trigger">
              <a href="#0" class="color-inherit flex height-100% width-100% flex-center" data-signin="login">
                <svg class="icon" viewBox="0 0 24 24" data-signin="login">
                  <title>Login</title>
                  <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                    <circle cx="12" cy="6" r="4" />
                    <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
                  </g>
                </svg>
              </a>
            </div>
            @endguest

            @auth
            <div class="dropdown js-dropdown">
              <div class="mega-nav__icon-btn dropdown__wrapper inline-block">
                  @if(Auth::user()->getMedia('avatars')->last())
                  <div class="author author--minimal dropdown__trigger">
                    <a href="#0" class="author__img-wrapper">
                      <img src="{{ Auth::user()->getMedia('avatars')->last()->getFullUrl('thumb') }}" alt="Author picture">
                  </div>
                  @else
                    <svg class="icon" viewBox="0 0 24 24">
                      <title>Go to account settings</title>
                      <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                        <circle cx="12" cy="6" r="4" />
                        <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
                      </g>
                    </svg>
                  @endif
                </a>
                <ul class="dropdown__menu" aria-label="submenu">
                  <li><a href="{{ url('site1/profile') }}" class="dropdown__item">Profile</a></li>
                  <li class="dropdown__separator" role="separator"></li>
                  <li><a href="{{ url('users/settings') }}" class="dropdown__item">Account Settings</a></li>
                  <li><a href="{{ url('/logout') }}" class="dropdown__item">Log out</a></li>
                </ul>
              </div><!-- /.mega-nav__icon-btn dropdown__wrapper inline-block -->
            </div><!-- /.dropdown js-dropdown -->
            @endauth

            <button class="reset mega-nav__icon-btn mega-nav__icon-btn--search js-tab-focus" aria-label="Toggle search" aria-controls="mega-nav-search">
              <svg class="icon" viewBox="0 0 24 24">
                <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                  <path d="M4.222 4.222l15.556 15.556" />
                  <path d="M19.778 4.222L4.222 19.778" />
                  <circle cx="9.5" cy="9.5" r="6.5" />
                </g>
              </svg>
            </button>
          </li>
          
          @guest
          <!-- 👇 button -->
          <li class="mega-nav__item js-signin-modal-trigger custom-mega-nav__item-column">
            <a href="#0" class="btn btn--primary mega-nav__btn" data-signin="signup">Register</a>
          </li>
          <li class="mega-nav__item js-signin-modal-trigger custom-mega-nav__item-column">
            <a href="#0" class="btn btn--subtle mega-nav__btn" data-signin="login">Login</a>
          </li>
          @endguest

          @auth
          <li class="mega-nav__item">
            <div class="mega-nav__icon-btns mega-nav__icon-btns--desktop">
              @include('site1.partials.notification')
            </div>
            <a href="{{ url('/logout') }}" class="btn btn--subtle mega-nav__btn">Log out</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
    <!-- 👇 search -->
    <div class="mega-nav__search js-mega-nav__search" id="mega-nav-search">
      <div class="mega-nav__search-inner">
        @include('users::partials.search-form')
        <div class="margin-top-lg">
          <p class="mega-nav__label">Quick Links</p>
          <ul>
            <li><a href="#0" class="mega-nav__quick-link">Find a Store</a></li>
            <li><a href="#0" class="mega-nav__quick-link">Your Orders</a></li>
            <li><a href="#0" class="mega-nav__quick-link">Documentation</a></li>
            <li><a href="#0" class="mega-nav__quick-link">Questions &amp; Answers</a></li>
            <li><a href="#0" class="mega-nav__quick-link">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>