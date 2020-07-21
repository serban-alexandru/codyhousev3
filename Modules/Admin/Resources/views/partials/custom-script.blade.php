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

    $(document).on('click', '.modal-trigger-edit-blog', function(e){
      e.preventDefault();

      var $this = $(this);
      var url = $this.attr('href');
      var updateURL = $this.data('update-url');

      $('#modal-edit-blog-form').attr('action', updateURL);
      var $element = $('#ajax-edit-blog-form');
      $element.load( url, function(response, status, xhr) {
      });
    });

    $(document).on('click', '.modal-trigger-add-blog', function(e){
      e.preventDefault();

      var $this = $(this);
      var url = $this.data('href');

      console.log(url);

      var $element = $('#ajax-add-blog-form');
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