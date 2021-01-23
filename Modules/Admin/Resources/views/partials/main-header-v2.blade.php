<header class="header-v2 js-header-v2 bg-contrast-high" data-animation="off" data-animation-offset="400">
  <div class="header-v2__wrapper">
    <div class="header-v2__container container max-width-lg">
      <div class="header-v2__logo">
      <a href="{{ url('/') }}">
         <div class="flex">
              {!! !empty($settings_data['logo_svg']) ? $settings_data['logo_svg'] : '' !!}
         </div>
        </div>
      </a>

    <a href="{{ url('/admin') }}">
      <h1 class="text-md items-start padding-right-xxl color-contrast-lower">Admin</h1>
    </a>
      <button class="header-v2__nav-control reset anim-menu-btn js-anim-menu-btn js-tab-focus" aria-label="Toggle menu">
        <i class="anim-menu-btn__icon anim-menu-btn__icon--close" aria-hidden="true"></i>
      </button>

      <nav class="header-v2__nav color-contrast-low" role="navigation">
        <ul class="header-v2__nav-list header-v2__nav-list--main">

          <li class="header-v2__nav-item header-v2__nav-item--main header-v2__nav-item--has-children">
            <a href="#0" class="header-v2__nav-link" aria-current="page">
              <span class="color-contrast-lower">Templates</span>
              <svg class="header-v2__nav-dropdown-icon icon margin-left-xxxs color-contrast-lower" aria-hidden="true" viewBox="0 0 16 16">
                <polyline fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="3.5,6.5 8,11 12.5,6.5 "></polyline>
              </svg>
            </a>

            <div class="header-v2__nav-dropdown header-v2__nav-dropdown--md">
              <ul class="header-v2__nav-list">
                <li class="header-v2__nav-item header-v2__nav-col-2">
                  <ul class="header-v2__nav-list">
                    <li class="header-v2__nav-item header-v2__nav-item--label">Portal sites</li>
                    <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Link One</a></li>
                    <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Link Two</a></li>
                    <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Link Three</a></li>
                  </ul>

                  <ul class="header-v2__nav-list">
                    <li class="header-v2__nav-item header-v2__nav-item--label">Services</li>
                    <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Link One</a></li>
                    <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Link Two</a></li>
                    <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Link Three</a></li>
                  </ul>

                  <ul class="header-v2__nav-list">
                    <li class="header-v2__nav-item header-v2__nav-item--label">Services</li>
                    <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Link One</a></li>
                    <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Link Two</a></li>
                    <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Link Three</a></li>
                  </ul>
                </li>

                <li class="header-v2__nav-item header-v2__nav-item--divider" role="separator"></li>

                <li class="header-v2__nav-item">
                  <ul class="header-v2__nav-list header-v2__nav-list--title-desc">
                    <li class="header-v2__nav-item">
                      <a href="#0" class="header-v2__nav-link">
                        <svg class="header-v2__nav-icon" aria-hidden="true" width="32" height="32" viewBox="0 0 32 32">
                          <circle fill="var(--color-accent)" opacity="0.2" cx="16" cy="16" r="16" />
                          <circle cx="11.5" cy="10.5" r="3.5" fill="var(--color-accent)" />
                          <path d="M22,12,4.729,27.352a15.982,15.982,0,0,0,26.24-5.742Z" fill="var(--color-accent)" /></svg>

                        <div>
                          <strong>Sub nav item</strong>
                          <small>Lorem ipsum dolor sit amet.</small>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>

          <li class="header-v2__nav-item header-v2__nav-item--main"><a href="/admin/users" class="color-contrast-lower">Users</a></li>
          <li class="header-v2__nav-item header-v2__nav-item--main"><a href="/admin/posts" class="color-contrast-lower">Posts</a></li>
          <li class="header-v2__nav-item header-v2__nav-item--main"><a href="/admin/tag" class="color-contrast-lower">Tags</a></li>
          <li class="header-v2__nav-item header-v2__nav-item--main"><a href="/admin/settings/" class="color-contrast-lower">Settings & SEO</a></li>
        </ul>

        <ul class="header-v2__nav-list header-v2__nav-list--main">
          <li class="header-v2__nav-item header-v2__nav-item--main header-v2__nav-item--has-children">
            <a href="#0" class="header-v2__nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><title>face-man</title><g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(0.5 0.5)" fill="#a8a8a8" stroke="#a8a8a8"><path fill="none" stroke-miterlimit="10" d="M1.051,10.933 C4.239,6.683,9.875,11.542,16,6c3,4.75,6.955,4.996,6.955,4.996"></path> <circle data-stroke="none" fill="#a8a8a8" cx="7.5" cy="14.5" r="1.5" stroke-linejoin="miter" stroke-linecap="square" stroke="none"></circle> <circle data-stroke="none" fill="#a8a8a8" cx="16.5" cy="14.5" r="1.5" stroke-linejoin="miter" stroke-linecap="square" stroke="none"></circle> <circle fill="none" stroke="#a8a8a8" stroke-miterlimit="10" cx="12" cy="12" r="11"></circle></g></svg>
            </a>

            <div class="header-v2__nav-dropdown">
              <ul class="header-v2__nav-list">
                <li class="header-v2__nav-item header-v2__nav-item--label">My Post Panel</li>
                <li class="header-v2__nav-item"><a href="/dashboard" class="header-v2__nav-link">Dashboard</a></li>
                <li class="header-v2__nav-item">
                  <a href="#0" class="header-v2__nav-link justify-between">
                    <span>Add Post <i class="sr-only">(opens in new window)</i></span>
                    <svg class="icon icon--xxs" aria-hidden="true" viewBox="0 0 12 12">
                      <g stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        <path d="M10.5,8.5v2a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-8a1,1,0,0,1,1-1h2"></path>
                        <polygon points="9.5 0.5 11.5 2.5 6.5 7.5 3.5 8.5 4.5 5.5 9.5 0.5"></polyline>
                        <line x1="11.5" y1="0.5" x2="5.5" y2="6.5"></line>
                      </g>
                    </svg>
                  </a>
                </li>
                
                <li class="header-v2__nav-item header-v2__nav-item--divider" role="separator"></li>
                <li class="header-v2__nav-item header-v2__nav-item--label">Admin</li>
                <li class="header-v2__nav-item"><a href="/admin" class="header-v2__nav-link">Admin Dashboard</a></li>
                <li class="header-v2__nav-item header-v2__nav-item--divider" role="separator"></li>
                <li class="header-v2__nav-item header-v2__nav-item--label">Profile settings</li>
                <li class="header-v2__nav-item"><a href="/profile" class="header-v2__nav-link">Profile</a></li>
                <li class="header-v2__nav-item"><a href="/users/settings" class="header-v2__nav-link">Edit Profile</a></li>
                <li class="header-v2__nav-item"><a href="#0" class="header-v2__nav-link">Logout</a></li>
              </ul>
            </div>
          </li>
          <li class="header-v2__nav-item header-v2__nav-item--main header-v2__nav-item--divider" role="separator"></li>
          <li class="header-v2__nav-item header-v2__nav-item--main"><a href="#0" class="btn btn--primary">Log out</a></li>
          
        </ul>
      </nav>
    </div>
  </div>
</header>