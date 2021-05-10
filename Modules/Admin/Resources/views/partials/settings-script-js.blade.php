@auth

<script>
  $(function(){
    function showErrorMsg(errors) {
      $('.alert').addClass('alert-danger').removeClass('alert-success');
      $('.alert .msg-container').html("");

      for (const [key, error] of Object.entries(errors)) {
        for (let i=0; i<error.length; i++) {
          $('.alert .msg-container').append($('<p />').html(error[i]));
        }
      }
      $('.alert').addClass('alert--is-visible');
    }

    function showSuccessMsg(message) {
      $('.alert').addClass('alert-success').removeClass('alert-danger');
      $('.alert .msg-container').html("");

      $('.alert .msg-container').append($('<p />').html(message));
      $('.alert').addClass('alert--is-visible');
    }

    $(document).on('click', '#btnSave', function(e){
      e.preventDefault();

      $(this).html('Please wait...');
      var formData = new FormData($('#formSetting')[0]);

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
      });

      $.ajax({
        url: "{{ route('settings.store') }}",
        dataType: 'json',
        type: 'post',
        contentType: false,
        processData: false,
        data: formData,
        success: function(response){
          console.log(response);

          if (response.status == false) {
            showErrorMsg(response.errors);
          } else {
            showSuccessMsg(response.message);
          }

          $('#btnSave').html('Save');
        }
      });
    });

    /** Custom script for smooth scrolling when there is a fixed header */
    var mainHeaderHeight = $('.js-hide-nav--main').height();
    var subHeaderHeight = $('.js-hide-nav--sub').height();
    var lastItemIndex = 0;
    $('.js-smooth-scroll').each(function(index) {
      $(this).click(function() {
        var currentItemIndex = index;
        if (currentItemIndex > lastItemIndex) {
          // down scroll
          $('html').css('scroll-padding', subHeaderHeight + 'px');
        } else {
          // up scroll
          $('html').css('scroll-padding', mainHeaderHeight + subHeaderHeight + 'px');
        }

        lastItemIndex = currentItemIndex;
      });
    });
  });
</script>
@endauth
