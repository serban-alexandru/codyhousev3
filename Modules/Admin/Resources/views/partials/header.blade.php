<header class="mega-nav mega-nav--mobile mega-nav--desktop@md position-relative js-mega-nav hide-nav js-hide-nav js-hide-nav--main">
  <div class="mega-nav__container">
    <!-- 👇 logo -->
    <a href="http://127.0.0.1:8000/admin" class="mega-nav__logo">
      <h2 class="logo">Admin</h2>
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
          <a href="#0" class="color-inherit dropdown__trigger">
            <svg class="icon" viewBox="0 0 24 24">
              <title>Go to account settings</title>
              <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                <circle cx="12" cy="6" r="4" />
                <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
              </g>
            </svg>
          </a>

          <ul class="dropdown__menu" aria-label="submenu">
            <li><a href="{{ url('profile') }}" class="dropdown__item">Profile</a></li>
            <li><a href="upload.html" class="dropdown__item">Upload</a></li>
            <li><a href="#0" class="dropdown__item">Scrape</a></li>
            <li class="dropdown__separator" role="separator"></li>
            <li><a href="#0" class="dropdown__item">Account Settings</a></li>
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
              Themes
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
            <a href="http://127.0.0.1:8000/admin/users" class="mega-nav__control">Users</a>
          </li>
          <li class="mega-nav__item">
              <a href="http://127.0.0.1:8000/admin/blog" class="mega-nav__control">Blogs</a>
            </li>
          <li class="mega-nav__item">
              <a href="http://127.0.0.1:8000/admin/article" class="mega-nav__control">Articles</a>
          </li>
          <li class="mega-nav__item">
            <a href="http://127.0.0.1:8000/admin/comment" class="mega-nav__control">Comments</a>
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
                <a href="#0" class="color-inherit flex height-100% width-100% flex-center dropdown__trigger">
                  <svg class="icon" viewBox="0 0 24 24">
                    <title>Go to account settings</title>
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                      <circle cx="12" cy="6" r="4" />
                      <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
                    </g>
                  </svg>
                </a>

                <ul class="dropdown__menu" aria-label="submenu">
                  <li><a href="{{ url('profile') }}" class="dropdown__item">Profile</a></li>
                  <li><a href="upload.html" class="dropdown__item">Upload</a></li>
                  <li><a href="#0" class="dropdown__item">Scrape</a></li>
                  <li class="dropdown__separator" role="separator"></li>
                  <li><a href="#0" class="dropdown__item">Account Settings</a></li>
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
            <a href="{{ url('/logout') }}" class="btn btn--subtle mega-nav__btn">Log out</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>

    <!-- 👇 search -->
    <div class="mega-nav__search js-mega-nav__search" id="mega-nav-search">
      <div class="mega-nav__search-inner">
        @include('admin::partials.search-form')
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