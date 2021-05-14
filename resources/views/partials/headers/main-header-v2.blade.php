<header class="header-v2 js-header-v2 bg-contrast-high hide-nav js-hide-nav js-hide-nav--main" data-animation="off" data-animation-offset="400">
  <div class="header-v2__wrapper">
    <div class="header-v2__container container max-width-lg">
      <div class="header-v2__sub-container">

        <!-- LOGO-->
        <a class="header-v2__logo" href="{{ url('/') }}">
          <div class="flex">
            {!! !empty($settings_data['logo_svg']) ? $settings_data['logo_svg'] : '' !!}
          </div>
        </a>
        <!-- END-->

        <!-- Logo Text-->
        <a href="{{ url('/') }}">
          <h1 class="logo">{{ !empty($settings_data['logo_title']) ? $settings_data['logo_title'] : '' }}</h1>
        </a>
      </div>
      <!-- END-->

      <!-- User Icon and Drop-down Mobile-->
      <div class="mobile-btn flex flex-center gap-xxs">
        <!-- Search Form -->
        <button class="header-v2__nav-control reset anim-menu-btn anim-menu-btn--search js-anim-menu-btn js-tab-focus" aria-label="Toggle search" menu-target="search-menu">
          <svg class="icon" viewBox="0 0 24 24">
            <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
              <path d="M4.222 4.222l15.556 15.556" />
              <path d="M19.778 4.222L4.222 19.778" />
              <circle cx="9.5" cy="9.5" r="6.5" />
            </g>
          </svg>
        </button>

        @auth
          @if(auth()->user()->avatar)
          <button class="header-v2__nav-control reset anim-menu-btn js-anim-menu-btn switch-icon switch-icon--rotate js-switch-icon js-tab-focus" aria-label="Toggle icon" menu-target="user-menu">
            <div class="mega-nav__icon-btn dropdown__wrapper inline-block author author--minimal-mobile switch-icon__icon switch-icon__icon--a">
              <div class="author__img-wrapper author--minimal dropdown__trigger">
                <img src="{{ auth()->user()->getAvatar() }}" alt="Logged in user avatar">
              </div>
            </div>
            <svg class="switch-icon__icon switch-icon__icon--b" viewBox="0 0 20 20">
              <g fill="none" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" stroke="#efefef">
                <line x1="15" y1="5" x2="5" y2="15"></line>
                <line x1="15" y1="15" x2="5" y2="5"></line>
              </g>
            </svg>
          </button>
          @else
          <button class="header-v2__nav-control reset anim-menu-btn anim-menu-btn--avatar js-anim-menu-btn js-tab-focus" aria-label="Toggle icon" menu-target="user-menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
              <title>face-man</title>
              <g class="icon__group" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(0.5 0.5)" fill="white" stroke="white">
                <path fill="none" stroke-miterlimit="10"
                  d="M1.051,10.933 C4.239,6.683,9.875,11.542,16,6c3,4.75,6.955,4.996,6.955,4.996"></path>
                <circle data-stroke="none" fill="white" cx="7.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                  stroke-linecap="square" stroke="none"></circle>
                <circle data-stroke="none" fill="white" cx="16.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                  stroke-linecap="square" stroke="none"></circle>
                <circle fill="none" stroke="white" stroke-miterlimit="10" cx="12" cy="12" r="11"></circle>
                <path d="M4.222 4.222l15.556 15.556" />
                <path d="M19.778 4.222L4.222 19.778" />
              </g>
            </svg>
          </button>
          @endif
        @endauth

        <button class="header-v2__nav-control reset anim-menu-btn js-anim-menu-btn js-tab-focus" aria-label="Toggle menu" menu-target="main-menu">
          <i class="anim-menu-btn__icon anim-menu-btn__icon--close" aria-hidden="true"></i>
        </button>
      </div>

      <nav id="main-menu" class="header-v2__nav color-contrast-low header-v2__nav-full-height margin-left-xxl@md" role="navigation">
        <?php 
          $shortcode = app('shortcode');
          echo $shortcode->compile('[menu name="Primary Menu" version=2]');

          if (isset($disable_shortcode) && $disable_shortcode)
            $shortcode->disable();
        ?>
      </nav>
      <!-- END-->

      <!-- User Icon and Drop-down Desktop -->
      <nav id="second-menu" class="header-v2__nav header-v2__nav-align-right color-contrast-low">
        <ul class="header-v2__nav-list header-v2__nav-list--main">
          <li class="header-v2__nav-item header-v2__nav-item--main">
            <!-- Search Form -->
            <button class="reset anim-menu-btn anim-menu-btn--search js-anim-menu-btn js-tab-focus" aria-label="Toggle search" menu-target="search-menu">
              <svg class="icon" viewBox="0 0 24 24">
                <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                  <path d="M4.222 4.222l15.556 15.556" />
                  <path d="M19.778 4.222L4.222 19.778" />
                  <circle cx="9.5" cy="9.5" r="6.5" />
                </g>
              </svg>
            </button>
          </li>
          <li class="header-v2__nav-item header-v2__nav-item--main header-v2__nav-item--has-children margin-left-sm">
            @auth
            <div class="mega-nav__icon-btn dropdown__wrapper inline-block author author--minimal-mobile margin-right-sm">
              <a href="#0" class="author__img-wrapper author--minimal dropdown__trigger">
                @if(auth()->user()->avatar)
                <img src="{{ auth()->user()->getAvatar() }}" alt="Logged in user avatar,">
                @else
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
                @endif
              </a>

              <div class="header-v2__nav-dropdown">
                <ul class="header-v2__nav-list">
                  <li class="header-v2__nav-item header-v2__nav-item--label">My Post Panel</li>
                  <li class="header-v2__nav-item"><a href="{{ url('dashboard') }}" class="header-v2__nav-link">Dashboard</a></li>
                  <li class="header-v2__nav-item">
                    <a href="#0" class="header-v2__nav-link justify-between">
                      <span>Add Post <i class="sr-only">(opens in new window)</i></span>
                      <svg class="icon icon--xxs" aria-hidden="true" viewBox="0 0 12 12">
                        <g stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
                          <path d="M10.5,8.5v2a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-8a1,1,0,0,1,1-1h2"></path>
                          <polygon points="9.5 0.5 11.5 2.5 6.5 7.5 3.5 8.5 4.5 5.5 9.5 0.5"></polygon>
                          <line x1="11.5" y1="0.5" x2="5.5" y2="6.5"></line>
                        </g>
                      </svg>
                    </a>
                  </li>

                  <li class="header-v2__nav-item header-v2__nav-item--divider" role="separator"></li>
                  <li class="header-v2__nav-item header-v2__nav-item--label">Profile settings</li>
                  <li class="header-v2__nav-item"><a href="{{ url('profile') }}" class="header-v2__nav-link">Profile</a></li>
                  <li class="header-v2__nav-item"><a href="{{ url('users/settings') }}" class="header-v2__nav-link">Edit Profile</a></li>
                  <li class="header-v2__nav-item"><a href="{{ url('/logout') }}" class="header-v2__nav-link">Logout</a></li>

                  <li class="header-v2__nav-item header-v2__nav-item--divider" role="separator"></li>
                  <li class="header-v2__nav-item header-v2__nav-item--label">Admin</li>
                  <li class="header-v2__nav-item"><a href="{{ url('admin') }}" class="header-v2__nav-link">Admin Dashboard</a></li>
                </ul>
              </div>
            </div>
            @endauth
          </li>
          <!-- END -->

          @guest
          <!-- Login and Sign-up buttons -->
          <li class="header-v2__nav-item padding-right-sm padding-left-sm"><a href="{{ url('/site2/login') }}" class="btn btn--subtle">Login</a>
          <li class="header-v2__nav-item"><a href="{{ url('/site2/register') }}" class="btn btn--primary">Signup</a></li>
          <!-- END -->
          @endguest

          @auth
          <li class="header-v2__nav-item padding-left-sm"><a href="{{ url('/logout') }}" class="btn btn--subtle">Log out</a></li>
          @endauth
        </ul>
      </nav>

      <!-- User Icon and Drop-down Mobile -->
      <nav id="user-menu" class="header-v2__nav header-v2__nav-dropdown">
        <ul class="header-v2__nav-list">
          <li class="header-v2__nav-item header-v2__nav-item--label">My Post Panel</li>
          <li class="header-v2__nav-item"><a href="{{ url('dashboard') }}" class="header-v2__nav-link">Dashboard</a></li>
          <li class="header-v2__nav-item">
            <a href="#0" class="header-v2__nav-link justify-between">
              <span>Add Post <i class="sr-only">(opens in new window)</i></span>
              <svg class="icon icon--xxs" aria-hidden="true" viewBox="0 0 12 12">
                <g stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
                  <path d="M10.5,8.5v2a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-8a1,1,0,0,1,1-1h2"></path>
                  <polygon points="9.5 0.5 11.5 2.5 6.5 7.5 3.5 8.5 4.5 5.5 9.5 0.5"></polygon>
                  <line x1="11.5" y1="0.5" x2="5.5" y2="6.5"></line>
                </g>
              </svg>
            </a>
          </li>

          <li class="header-v2__nav-item header-v2__nav-item--divider" role="separator"></li>
          <li class="header-v2__nav-item header-v2__nav-item--label">Profile settings</li>
          <li class="header-v2__nav-item"><a href="{{ url('profile') }}" class="header-v2__nav-link">Profile</a></li>
          <li class="header-v2__nav-item"><a href="{{ url('users/settings') }}" class="header-v2__nav-link">Edit Profile</a></li>
          <li class="header-v2__nav-item"><a href="{{ url('/logout') }}" class="header-v2__nav-link">Logout</a></li>

          <li class="header-v2__nav-item header-v2__nav-item--divider" role="separator"></li>
          <li class="header-v2__nav-item header-v2__nav-item--label">Admin</li>
          <li class="header-v2__nav-item"><a href="{{ url('admin') }}" class="header-v2__nav-link">Admin Dashboard</a></li>
        </ul>
      </nav>

      <!-- Search Box -->
      <div id="search-menu" class="header-v2__nav header-v2__nav-search">
        <div class="">
          <form action="{{ route('pages.posts') }}" method="GET">
            <input type="hidden" name="limit" value="{{$limit ?? ''}}">
            <input type="hidden" name="sort" value="{{$sort ?? ''}}">
            <input type="hidden" name="order" value="{{$order ?? ''}}">

            <input class="form-control width-100%" type="reset search" name="q" value="{{ $q ?? '' }}" id="megasite-search" placeholder="Search..." aria-label="Search">
          </form>
          <div>
            <ul class="header-v2__nav-list">
              <li class="header-v2__nav-item header-v2__nav-item--divider" role="separator"></li>
              <li class="header-v2__nav-item header-v2__nav-item--label">Quick Links</li>
              <li class="header-v2__nav-item"><a href="https://www.facebook.com/saigonfinest" class="header-v2__nav-link">Visit us on Facebook</a></li>
              <li class="header-v2__nav-item"><a href="https://www.instagram.com/saigon_finest/" class="header-v2__nav-link">Visit us on Instagram</a></li>
              <li class="header-v2__nav-item"><a href="https://saigonfinest.com/contact" class="header-v2__nav-link">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
