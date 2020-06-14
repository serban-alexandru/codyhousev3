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

  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  @guest
  <script>
    (function(){

      // toggle hide/ show password
      // use this only on dynamically loaded content
      // remove this block of code when not using dynamically loaded content
      $(document).on('click', '.js-hide-password', function(e) {
        e.preventDefault();
        var $this = $(this);
        var text = $this.text();
        var password = $this.siblings('input');

        "password" == password.attr("type")
              ? password.attr("type", "text")
              : password.attr("type", "password");

        $this.text(text == "Hide" ? "Show" : "Hide");
      });
      // toggle hide/ show password

      // event handler for clicking any trigger for modal forms
      $(document).on('click', '[data-signin]', function () {
        var $selector = null;
        var $this = $(this);
        var type = $this.data('signin');

        switch (type) {
          case 'login':
            $selector = $('#ajax-signin-form');
            break;
          case 'signup':
            $selector = $('#ajax-signup-form');
            break;
          case 'reset':
            $selector = $('#ajax-resetpassword-form');
            break;
          default:
            return;
            break;
        }
        showDynamicView($selector);
      });

      // watch for keydown
      $(document).on('keydown', function(event){
        // check if pressed on ESC key
        if (event.which === 27) {
          resetForms();
        }
      });

      // reset form when modal is clicked
      $(document).on('click', '.js-signin-modal', function(event){
        // if not the modal, then just do nothing
        if (event.target !== this){
          return;
        }
        // else reset forms
        resetForms();

        // remove hash when the modal closes
        // eg. `/#login`
        history.pushState("", document.title, window.location.pathname + window.location.search);
      });

      // resets form inputs, feedbacks, input errors
      function resetForms(){
        $('form').trigger('reset');
        $('.newsletter-card__feedback').removeClass('newsletter-card__feedback--is-visible');
        $('.cd-signin-modal__error').removeClass('cd-signin-modal__error--is-visible');
        $('input').removeClass('cd-signin-modal__input--has-error');
      }

      // show dynamic view like forms
      function showDynamicView($element) {
        var loaded = $element.data('loaded');
        var url = $element.data('url');

        // if true, don't reload
        if (loaded == 'true') {
          return;
        }

        $element.load( url, function(response, status, xhr) {
          var $this = $(this);
          $this.removeClass('custom-ajax-frame-loader');
        });
        $element.data('loaded', 'true');

      }

      // Check hash value if `login`
      // Then show Sign in modal
      if (location.hash.substr(1) == 'login') {
        $('[data-signin="login"]')[0].click();
      }

    })();
  </script>
  @endguest

  @auth
  <script>
    (function(){

      // Interactive table checkbox toggle
      $(document).on('input', '.js-int-table__select-all, .js-int-table__select-row', function(){
        var $checkBoxesChecked = $('.js-int-table__select-row:checked');
        var $totalSelected = $('.table-total-selected');
        var $inputHiddenTemplate = $("#selected-id-template").html().trim();

        $('.bulk-selected-ids').html('');

        $checkBoxesChecked.each(function(){
          var $this = $(this);
          var $selectedID = $inputHiddenTemplate.replace(/@{{value}}/gi, $this.val());
          $('.bulk-selected-ids').append($selectedID);
        });

        $totalSelected.text($checkBoxesChecked.length);
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

      // when pagination links are clicked, only load the table
      $(document).on('click', '.site-table-pagination-ajax a', function(e){
        e.preventDefault();
        var $this = $(this);
        var url = $this.attr('href');

        $('#site-table-with-pagination-container').load(url);
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
    })();
  </script>
  @endauth

</footer>