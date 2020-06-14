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
  <a href="#0" class="mega-nav__icon-btn">
    <svg class="icon" viewBox="0 0 24 24">
      <title>Go to account settings</title>
      <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
        <circle cx="12" cy="6" r="4" />
        <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
      </g>
    </svg>
  </a>
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