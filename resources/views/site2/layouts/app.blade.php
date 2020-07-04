
  <!-- header -->
  <header class="dr-nav-header">
    <div class="container position-relative height-100% flex items-center">
      <a class="dr-nav-header__logo" href="index.html">
        <svg viewBox="0 0 64 64">
          <title>Go to homepage</title>
          <path fill="currentColor" d="M32 1a31 31 0 1031 31A31 31 0 0032 1zm15.189 17.262a5.693 5.693 0 00-2.169 1.686 11.279 11.279 0 00-1.891 3.552l-9.281 25.119q-.495-.043-1.547-.043-1.011 0-1.483.043L19.582 21.076a5.357 5.357 0 00-1.3-2.116 2.47 2.47 0 00-1.471-.7v-.881q2.642.129 6.7.129 4.49 0 6.681-.129v.881a6.764 6.764 0 00-2.374.4 1.236 1.236 0 00-.718 1.24 6.34 6.34 0 00.537 2.062l7.756 19.7 5.416-14.592a17.5 17.5 0 001.224-5.37 3.216 3.216 0 00-.934-2.567 4.374 4.374 0 00-2.761-.87v-.881q2.964.129 5.5.129 2.019 0 3.351-.129z" />
        </svg>
      </a>
  
      <ul class="radio-switch ie:hide" id="theme-switch">
        <li class="radio-switch__item">
          <input class="radio-switch__input sr-only" type="radio" name="radio-switch-name" id="radio-1" value="light" checked>
          <label class="radio-switch__label" for="radio-1"><svg class="icon icon--xs" viewBox="0 0 16 16">
              <title>Enable light mode</title>
              <path d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.414-1.414zM14 7h2v2h-2zM12.95 14.433l-1.415-1.414 1.414-1.414 1.415 1.413zM7 14h2v2H7zM2.98 14.363L1.566 12.95l1.415-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.707L4.465 3.12 3.05 4.535 1.636 3.121z" />
              <path d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4z" />
            </svg></label>
        </li>
  
        <li class="radio-switch__item">
          <input class="radio-switch__input sr-only" type="radio" name="radio-switch-name" id="radio-2" value="dark">
          <label class="radio-switch__label" for="radio-2"><svg class="icon icon--xs" viewBox="0 0 16 16">
              <title>Enable dark mode</title>
              <path d="M6,0C2.5,0.9,0,4.1,0,7.9C0,12.4,3.6,16,8.1,16c3.8,0,6.9-2.5,7.9-6C9.9,11.7,4.3,6.1,6,0z"></path>
            </svg></label>
          <div aria-hidden="true" class="radio-switch__marker"></div>
        </li>
      </ul>
    </div>
  </header>
  
  <!-- menu button -->
  <div class="dr-nav-control-wrapper">
    <div class="container height-100% flex items-center">
      <button class="reset margin-left-auto dr-nav-control anim-menu-btn js-anim-menu-btn js-dr-nav-control js-tab-focus" aria-label="Toggle navigation" aria-controls="dr-nav-id">
        <svg class="dr-nav-control__bg" aria-hidden="true" viewBox="0 0 48 48">
          <circle cx="24" cy="24" r="22" stroke-miterlimit="10" /></svg>
        <i class="anim-menu-btn__icon anim-menu-btn__icon--arrow-right" aria-hidden="true"></i>
      </button>
    </div>
  </div>
  
  <!-- drawer -->
  <div class="drawer drawer--modal js-drawer js-drawer--modal" id="dr-nav-id">
    <div class="drawer__content" role="alertdialog" aria-labelledby="dr-nav-title">
      <div class="drawer__body flex flex-column js-drawer__body">
        <header class="dr-nav-drawer-header padding-x-md">
          <h4 id="dr-nav-title">Menu</h4>
        </header>
  
        <nav class="dr-nav padding-md" aria-label="Main">
          <ul>
            <li>
              <a class="dr-nav__link" href="index.html">
                <span>All</span>
                <span>106</span>
              </a>
            </li>

            <li>
              <a class="dr-nav__link" href="category.html">
                <span>News</span>
                <span>35</span>
              </a>
            </li>
  
            <li>
              <a class="dr-nav__link" href="category.html">
                <span>Creative Industry</span>
                <span>17</span>
              </a>
            </li>
  
            <li>
              <a class="dr-nav__link" href="category.html">
                <span>Video</span>
                <span>12</span>
              </a>
            </li>
  
            <li>
              <a class="dr-nav__link" href="category.html">
                <span>Photography</span>
                <span>24</span>
              </a>
            </li>
  
            <li>
              <a class="dr-nav__link" href="category.html">
                <span>Tutorials</span>
                <span>18</span>
              </a>
            </li>
          </ul>
        </nav>
  
        <footer class="padding-md margin-top-auto">
          <div class="margin-bottom-xs">
            <nav>
              <ul class="text-sm text-xs@md flex flex-wrap gap-xs">
                <li>Pages:</li>
                <li><a href="index.html">Blog v1</a></li>
                <li><a href="blog-v2.html">Blog v2</a></li>
                <li><a href="blog-v3.html">Blog v3</a></li>
                <li><a href="blog-v4.html">Blog v4</a></li>
                <li><a href="blog-v5.html">Blog v5</a></li>
                <li><a href="about.html">About</a></li>
              </ul>
            </nav>
          </div>

          <div class="search-input search-input--icon-right">
            <input class="form-control width-100% height-100%" type="search" placeholder="Search..." aria-label="Search">
            <button class="search-input__btn">
              <svg class="icon" viewBox="0 0 24 24">
                <title>Submit</title>
                <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10">
                  <line x1="22" y1="22" x2="15.656" y2="15.656"></line>
                  <circle cx="10" cy="10" r="8"></circle>
                </g>
              </svg>
            </button>
          </div>
        </footer>
      </div>
    </div>
  </div>
<script src="assets/js/scripts.js"></script>
