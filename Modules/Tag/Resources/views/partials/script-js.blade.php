@auth

<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/raw@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>

<script>
  (function(){
    const editor = new EditorJS({
      /**
      * Id of Element that should contain Editor instance
      */
      holder: 'editorjs',
      tools: {
        header: Header,
        raw: RawTool,
        image: SimpleImage,
        embed: Embed,
        quote: Quote,
        checklist: {
          class: Checklist,
          inlineToolbar: true,
        },
        list: {
          class: List,
          inlineToolbar: true,
        }
      }
    });

    $('.site-editor').on('input', function(){
      var $this = $(this);

      if($this.data('target-input')){
        var $targetInput = $($this.data('target-input'));

        editor.save().then((outputData) => {
          // Save data as string
          $targetInput.val(JSON.stringify(outputData));
        }).catch((error) => {
          console.log('Saving failed: ', error);
        });
      }

    });

    // login form
    $(document).on('submit', '#add-tag-form', function(e){
      e.preventDefault();

      var $this = $(this);
      var $submitButtons = $this.find('button[type="submit"]');

      var formData = new FormData($this[0]);

      var url = $this.attr('action');
      var method = $this.attr('method');

      var $feedback = $this.find('.form-alert');

      // Disable buttons
      $submitButtons.prop('disabled', true);


      $.ajax({
        url: url,
        type: method,
        dataType: 'JSON',
        data: formData,
        processData: false,
        contentType: false,
        async: true,
        success:function(response){
          console.log(formData, response);

          if (response.status === 'success') {
            $feedback.removeClass('alert--error').addClass('alert--success alert--is-visible').html('<strong>Success!</strong> ' + response.message);

            // reset
            $this[0].reset();

            window.location.reload();
          }else{
            $feedback.removeClass('alert--success').addClass('alert--error alert--is-visible').html(response.message);

            // Enable buttons
            $submitButtons.prop('disabled', false);
          }
        },
        error: function(response){
          console.log(response.responseText);
          var jsonResponse = response.responseJSON;
          var errors = jsonResponse.errors;
          var errorsHTML = '';

          console.log('ERROR', response.responseText);

          $.each( errors, function( key, value ) {
            errorsHTML += value[0];

            if (key < errors.length - 1) {
              errorsHTML += errorsHTML + '</br>';
            }

          });

          $feedback.removeClass('alert--success').addClass('alert--error alert--is-visible').html(errorsHTML);

          // Enable buttons
          $submitButtons.prop('disabled', false);

          console.log('ERRORS', errorsHTML);

        }
        });
    });

  })();
</script>

<script>
  (function(){

    // load content when user clicked on sidebar links
    $(document).on('click', '.site-load-content a', function (e) {
      e.preventDefault();
      var $this = $(this);
      var url = $this.attr('href');

      $('meta[name="current-url"]').attr('content', url);
      console.log(url);

      // loads page content inside this element
      $('#site-table-with-pagination-container').load(url);
    });

    console.log('loaded ???');
  })();
</script>
@endauth