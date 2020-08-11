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
            <li><a href="http://127.0.0.1:8000/site1/profile" class="dropdown__item">Profile</a></li>
            <li><a href="http://127.0.0.1:8000/site1/editprofile" class="dropdown__item">Edit Profile</a></li>
            <li><a href="#0" class="dropdown__item">Scrape</a></li>
            <li class="dropdown__separator" role="separator"></li>
            <li><a href="#0" class="dropdown__item">Account Settings</a></li>
            <li><a href="{{ url('/logout') }}" class="dropdown__item">Log out</a></li>
          </ul>
        </div>
      </div>
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