<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="current-url" content="{{ url()->full() }}">

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
  <title>Title</title>
</head><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&display=swap" rel="stylesheet">


  <header class="mega-nav mega-nav--mobile mega-nav--desktop@md position-relative js-mega-nav hide-nav js-hide-nav js-hide-nav--main">
    <div class="mega-nav__container">
      <!-- 👇 logo -->
      <a href="http://127.0.0.1:8000/" class="mega-nav__logo">
        <h2 class="logo">Curateship</h2>
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
              <a href="http://127.0.0.1:8000/" class="mega-nav__control">Users</a>
            </li>
            <li class="mega-nav__item">
                <a href="http://127.0.0.1:8000/" class="mega-nav__control">Blogs</a>
              </li>
              <li class="mega-nav__item">
                <a href="http://127.0.0.1:8000/" class="mega-nav__control">Reviews</a>
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
        </div>
      </div>

      <!-- 👇 search -->
      <div class="mega-nav__search js-mega-nav__search" id="mega-nav-search">
        <div class="mega-nav__search-inner">
          <form action="{{ url('admin/users') }}" method="GET">
            <input type="hidden" name="limit" value="{{$limit ?? ''}}">
            <input type="hidden" name="sort" value="{{$sort ?? ''}}">
            <input type="hidden" name="order" value="{{$order ?? ''}}">

            <input class="form-control width-100%" type="reset search" name="q" value="{{ $q ?? '' }}" id="megasite-search" placeholder="Search..." aria-label="Search">
          </form>
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

<body>
  @yield('content')


  <footer class="footer-v5 padding-y-xxxxl">
    <div class="container max-width-lg">
      <div class="footer-v5__intro">
        <nav>
          <ul class="footer-v5__popular-links">
            <li><a href="http://127.0.0.1:8000/about">About Us</a></li>
            <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
            <li><a href="#0">Advertise</a></li>
          </ul>
        </nav>

        <a href="#" class="nav-v5__back-to-top">Back to top &uarr;</a>
      </div>

      <div class="footer-v5__colophon">
        <p class="footer-v5__print">&copy; Copyright Curateship</p>

        <section class="socials text-center">
          <div class="container max-width-md">
            <div class="margin-bottom-xs">
            </div>

            <ul class="socials__btns flex flex-left gap-sm">
              <li>
                <a href="#0">
                  <svg class="icon" viewBox="0 0 32 32"><title>Follow us on Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
                </a>
              </li>

              <li>
                <a href="#0">
                  <svg class="icon" viewBox="0 0 32 32"><title>Follow us on Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
                </a>
              </li>


              <li>
                <a href="#0">
                  <svg class="icon" viewBox="0 0 32 32"><title>Follow us on Instagram</title><path d="M16,3.7c4,0,4.479.015,6.061.087a6.426,6.426,0,0,1,4.51,1.639,6.426,6.426,0,0,1,1.639,4.51C28.282,11.521,28.3,12,28.3,16s-.015,4.479-.087,6.061a6.426,6.426,0,0,1-1.639,4.51,6.425,6.425,0,0,1-4.51,1.639c-1.582.072-2.056.087-6.061.087s-4.479-.015-6.061-.087a6.426,6.426,0,0,1-4.51-1.639,6.425,6.425,0,0,1-1.639-4.51C3.718,20.479,3.7,20.005,3.7,16s.015-4.479.087-6.061a6.426,6.426,0,0,1,1.639-4.51A6.426,6.426,0,0,1,9.939,3.79C11.521,3.718,12,3.7,16,3.7M16,1c-4.073,0-4.584.017-6.185.09a8.974,8.974,0,0,0-6.3,2.427,8.971,8.971,0,0,0-2.427,6.3C1.017,11.416,1,11.927,1,16s.017,4.584.09,6.185a8.974,8.974,0,0,0,2.427,6.3,8.971,8.971,0,0,0,6.3,2.427c1.6.073,2.112.09,6.185.09s4.584-.017,6.185-.09a8.974,8.974,0,0,0,6.3-2.427,8.971,8.971,0,0,0,2.427-6.3c.073-1.6.09-2.112.09-6.185s-.017-4.584-.09-6.185a8.974,8.974,0,0,0-2.427-6.3,8.971,8.971,0,0,0-6.3-2.427C20.584,1.017,20.073,1,16,1Z"></path><path d="M16,8.3A7.7,7.7,0,1,0,23.7,16,7.7,7.7,0,0,0,16,8.3ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z"></path><circle cx="24.007" cy="7.993" r="1.8"></circle></svg>
                </a>
              </li>
            </ul>
          </div>
        </section>

        <p class="footer-v5__print">
          <a href="#0" class="footer-v5__print-link">Terms</a>
          <a href="#0" class="footer-v5__print-link">Privacy</a>
          <a href="#0" class="footer-v5__print-link">Cookies</a>
        </p>
      </div>
    </div>
  </footer>

  <script src="{{ asset('assets/js/scripts.js') }}"></script>

  @auth
  <script>
    (function(){

      setInterval(() => {
        if ($('.mega-nav').hasClass('hide-nav--off-canvas')) {
          $('.sidebar--sticky-on-desktop').addClass('custom');
        }else{
          $('.sidebar--sticky-on-desktop').removeClass('custom');
        }
      }, 0);

      $('.custom-modal-hide-body-scroll').on('modalIsOpen', function(){
        $('body').css('overflow', 'hidden');
      }).on('modalIsClose', function(){
        $('body').css('overflow', 'inherit');
      });

      // Interactive table checkbox toggle
      $(document).on('input', '.js-int-table__select-all, .js-int-table__select-row', function(){
        var $checkBoxesChecked = $('.js-int-table__select-row:checked');
        var $totalSelected = $('.table-total-selected');
        console.log($("#selected-id-template").html());
        var $inputHiddenTemplate = $("#selected-id-template").html().trim();

        $('.bulk-selected-ids').html('');

        $checkBoxesChecked.each(function(){
          var $this = $(this);
          var $selectedID = $inputHiddenTemplate.replace(/@{{value}}/gi, $this.val());
          $('.bulk-selected-ids').append($selectedID);
        });

        $totalSelected.text($checkBoxesChecked.length);
      });

      // when pagination links are clicked, only load the table
      $(document).on('click', '.site-table-pagination-ajax a, .site-table-filter a', function(e){
        e.preventDefault();
        var $this = $(this);
        var url = $this.attr('href');

        $('meta[name="current-url"]').attr('content', url);
        console.log(url);

        $('.bulk-selected-ids').html(''); // remove hidden inputs on bulk select
        $('.table-total-selected').text('0'); // set counter to 0

        $('#site-table-limit-dropdown').find('[data-index="0"]').click(); // reset dropdown

        $('#site-table-with-pagination-container').load(url);
      });

      // watch for change on the results limit dropdown
      $(document).on('change', '#site-table-limit', function() {
        var $this = $(this);
        var $submitForm = $this.closest('form');
        /* $submitForm.submit();
        return; */
        var url = $submitForm.attr('action');
        var method = $submitForm.attr('method');
        var dataType = 'HTML';
        var data = $submitForm.serialize();

        $.ajax({
          url: url,
          method: method,
          dataType: dataType,
          data: data
        })
          .done(function(data) {
            $('#site-table-with-pagination-container').html(data);
          })
          .fail(function(jqXHR, textStatus) {
            console.log('Request failed: ' + textStatus);
            alert('Something went wrong. Please reload the page.');
          })
          .always(function() {});

      });

      // change sort and order whenever a table header column is toggled
      $(document).on('click', '.js-int-table__cell--sort', function(){
        var $this = $(this);
        var sort = $this.data('sort')
        var $checkedOrder = $this.find('input[type="radio"]:checked');
        var order = (order == 'none') ? 'desc' : $checkedOrder.val();

        $('input[name="sort"]').val(sort);
        $('input[name="order"]').val(order);

        console.log(sort, order);
      });

      $(document).on('click', '.site-table-filter a', function(){
        var $this = $(this);
        $('.site-table-filter a').attr('aria-current', '');
        $this.attr('aria-current', 'page');
      });

      $('[data-control-form]').on('click', function(){
        var $this = $(this);
        var $form = $($this.data('control-form'));

        $form.submit();
      });

      $(document).on('click', '.modal-trigger-edit-user', function(e){
        e.preventDefault();

        var $this = $(this);
        var url = $this.attr('href');
        var updateURL = $this.data('update-url');

        $('#modal-edit-user-form').attr('action', updateURL);
        var $element = $('#ajax-edit-user-form');
        $element.load( url, function(response, status, xhr) {
        });
      });

      $(document).on('click', '.modal-trigger-add-user', function(e){
        e.preventDefault();

        var $this = $(this);
        var url = $this.data('href');

        console.log(url);

        var $element = $('#ajax-add-user-form');
        $element.load( url, function(response, status, xhr) {
        });
      });

      $('.modal-form').on('submit', function(){
        var $this = $(this);

        var url = $this.attr('action');
        var method = $this.attr('method');
        var dataType = 'JSON';
        var data = $this.serialize();

        var currentURL = $('meta[name="current-url"]').attr('content');

        $this.find('.form-error-msg').removeClass('form-error-msg--is-visible').html('');

        $.ajax({
          url: url,
          method: method,
          dataType: dataType,
          data: data,
          success : function(response) {
            console.log('Response', response);

            if (response.status == 'success') {
              // remove error messages
              $this.find('.form-error-msg').removeClass('form-error-msg--is-visible').html('');

              $this.find('.alert').addClass('alert--is-visible').find('.alert-message').html(response.message);

              $('#site-table-with-pagination-container').load(currentURL);
            }

            if (response.clear) {
              $this.get(0).reset();
            }
          },
          error: function(response, textStatus) {
            var jsonResponse = response.responseJSON;
            var errors = jsonResponse.errors;
            console.log(response);

            $.each( errors, function( key, value ) {
              $this.find('[name="'+key+'"]' + ' + .form-error-msg').addClass('form-error-msg--is-visible').html(value[0]);
            });
          },
          always: function(response){
            console.log(response);
          },
        });

        return false;
      });

    })();
  </script>
  @endauth

</body>

</html>