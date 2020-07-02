<header class="mega-nav mega-nav--mobile mega-nav--desktop@md position-relative js-mega-nav hide-nav js-hide-nav js-hide-nav--main">
    <div class="mega-nav__container">
      <!-- 👇 logo -->
      <a href="http://127.0.0.1:8000/site1" class="mega-nav__logo">
        <h2 class="logo">Curateship</h2>
      </a>
  
      @include('site1.header.user-icon-mobile')
      <div class="mega-nav__nav js-mega-nav__nav" id="mega-nav-navigation" role="navigation" aria-label="Main">
        <div class="mega-nav__nav-inner">
          <ul class="mega-nav__items">
            <!-- 👇 layout 2 -> multiple lists -->
            <li class="mega-nav__item js-mega-nav__item">
              <button class="reset mega-nav__control js-mega-nav__control js-tab-focus">
                Tags
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
                    <li class="mega-nav__label">Clothing</li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Clothing</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Coats</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Dresses</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Jackets</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Jeans</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Jackets</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Jeans</a></li>
                  </ul>
  
                  <ul class="mega-nav__sub-items">
                    <li class="mega-nav__label">Shoes</li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Shoes</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Trainers</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Heels</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Boots</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Ankle Boots</a></li>
                  </ul>
  
                  <ul class="mega-nav__sub-items">
                    <li class="mega-nav__label">Jackets</li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Shoes</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Trainers</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Heels</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Boots</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Ankle Boots</a></li>
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
              <a href="http://127.0.0.1:8000/" class="mega-nav__control">Mangas</a>
            </li>

            <li class="mega-nav__item">
                <a href="http://127.0.0.1:8000/" class="mega-nav__control">Users</a>
              </li>
          </ul>
  
          @include('site1.header.dropdown-items')
        </div>
      </div>
  
      <!-- 👇 search -->
      <div class="mega-nav__search js-mega-nav__search" id="mega-nav-search">
        <div class="mega-nav__search-inner">
          <input class="form-control width-100%" type="reset search" name="megasite-search" id="megasite-search" placeholder="Search..." aria-label="Search">
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