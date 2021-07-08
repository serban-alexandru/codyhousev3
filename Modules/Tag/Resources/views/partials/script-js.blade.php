@auth
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/raw@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>

<script>
  $(function(){

    const ImageTool = window.ImageTool;

    var editor = new EditorJS({
      /**
      * Id of Element that should contain Editor instance
      */
      holder: 'editorjs',
      placeholder: 'Tell your story...',
      tools: {
        header: Header,
        raw: RawTool,
        image: {
          class: ImageTool,
          config: {
            endpoints: {
              byFile: window.location.origin + '/editorjs/upload-image'
            },
            additionalRequestHeaders : {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          }
        },
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

    var editor2 = new EditorJS({
      /**
      * Id of Element that should contain Editor instance
      */
      holder: 'editorjs2',
      placeholder: 'Tell your story...',
      tools: {
        header: Header,
        raw: RawTool,
        image: {
          class: ImageTool,
          config: {
            endpoints: {
              byFile: window.location.origin + '/editorjs/upload-image'
            },
            additionalRequestHeaders : {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          }
        },
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

    $('.site-editor').on('input click', function(){
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

    $('#editorjs2, .trigger-site-editor-save').on('input click', function(){
      var $this = $(this);

      if($this.data('target-input')){
        var $targetInput = $($this.data('target-input'));

        editor2.save().then((outputData) => {
          // Save data as string
          $targetInput.val(JSON.stringify(outputData));
        }).catch((error) => {
          console.log('Saving failed: ', error);
        });
      }

    });

    // Set tag_publish defaults to false
    $('[name="tag_publish"]').val(false);

    // Toggle tag_publish to true
    $(document).on('click', '[name="tag_publish"]', function(){
      $(this).val(true);
    });

    // Add tag form
    $(document).on('submit', '#add-tag-form, #edit-tag-form', function(e){
      e.preventDefault();

      var $this = $(this);
      var $submitButtons = $this.find('button[type="submit"]');
      var toPublish = $this.find('[name="tag_publish"]').val();

      var formData = new FormData($this[0]);
      formData.append('tag_publish', toPublish);

      var url = $this.attr('action');
      var method = $this.attr('method');

      var $feedback = $this.find('.form-alert');

      // Disable buttons
      $submitButtons.prop('disabled', true);

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
      });

      $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        data: formData,
        processData: false,
        contentType: false,
        complete: function(){
          $('[name="tag_publish"]').val(false);
        },
        success:function(response){
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

    $(document).on('click', '[aria-controls="modal-add-tag"]', function(){
      var $modalForm = $('#add-tag-form');

      editor.clear();

      $('[name="tag_publish"]').show();
      $('[name="tag_id"]').val(0);
      $modalForm[0].reset();
      $modalForm.attr('action', $modalForm.data('action'));
    });

    $(document).on('click', '.site-load-modal-edit-form', function(e){
      var $this = $(this);
      var $target = $($this.data('target'));
      var url = $this.data('url');
      var method = $this.data('method');

      var $modalForm = $('#edit-tag-form');
      $modalForm.find(':input').prop('disabled', true);

      editor2.clear();

      $('[name="tag_publish"]').hide();

      $.ajax({
        url: url,
        method: method,
        dataType: 'JSON'
      })
      .done(function(response) {
        var data = response.data;
        $('[name="tag_id"]').val(data.id);

        $('[name="tag_category_id"]').val(data.tag_category_id);

        // workaround to select js-select
        setTimeout(() => {
          $('#tag_category_id-dropdown').find('[data-value="'+data.tag_category_id+'"].select__item--option').click();
        }, 1);

        $('[name="tag_name"]').val(data.name);
        $('[name="tag_seo_title"]').val(data.seo_title);
        $modalForm.attr('action', data.submit_url);

        $modalForm.find(':input').prop('disabled', false);

        if (response.data.description != null) {
          var editorData = JSON.parse(response.data.description);
          if (editorData.blocks.length > 0) {
            editor2.render(editorData);
            $('[name="tag_description"]').val(response.data.description);
          }
        } else {
          $('[name="tag_description"]').val('');
        }

        $('#thumbnailPreview').attr('src', response.data.thumbnail);
      })
      .fail(function(response, textStatus) {
        console.log(response);
      })
      .always(function() {});
    });

    // Add tag category form
    $(document).on('submit', '#add-tag-category-form', function(e){
      e.preventDefault();

      var $this = $(this);
      var $submitButtons = $this.find('button[type="submit"]');

      var formData = $this.serialize();

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
        complete: function(){
          //
        },
        success:function(response){
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

  });
</script>

<script>
  (function(){

    // load content when user clicked on sidebar links
    $(document).on('change', '#filterItems', function (e) {
      e.preventDefault();
      var $this = $(this);
      var url = "{{ url('/admin/tag') }}";
      if ($this.val()) {
        url = url + '?is_' + $this.val() + '=1';
      }
      $('meta[name="current-url"]').attr('content', url);

      localStorage.setItem("cs_admin_tag_init_tab", $(this).val());

      // loads page content inside this element
      $('#site-table-with-pagination-container').load(url, function(){

        // Apply pagination dynamically
        var $tablePaginationBottom = $('#table-pagination-bottom');
        var $tablePaginationTop = $('#table-pagination-top');

        $tablePaginationTop.html(
          ($tablePaginationBottom.length > 0) ?
            $tablePaginationBottom.html() :
            $tablePaginationTop.html('')
        );
      });
    });

    // init reload previous tab logic
    var init_tab = localStorage.getItem("cs_admin_tag_init_tab");
    if (init_tab != null && document.referrer == document.location) {
      $('#filterItems-dropdown button[data-value="' + init_tab + '"]').click();
      return false;
    } else {
      localStorage.setItem("cs_admin_tag_init_tab", ""); // clear
    }

    $(document).on('change', '#upload-file', function(){
      var ddfArea = $(this).closest('.ddf__area');

      ddfArea.addClass('ddf__area--file-dropped');
      ddfArea.find('.js-ddf__files-counter').html("1 selected file");
    });

  })();
</script>
@endauth
