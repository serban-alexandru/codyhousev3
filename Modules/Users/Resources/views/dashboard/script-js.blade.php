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
  (function(){
    // Close modal trigger
    $('[data-toggle="close-modal"]').on('click', function(){
      var $this = $(this);
      var closeModalBtn = $($this.data('target-close'));

      closeModalBtn.click();
    });

    // load content when user clicked on sidebar links
    $(document).on('click', '.ajax-link', function (e) {
      e.preventDefault();
      var $this = $(this);
      var url = $this.attr('href');

      $('meta[name="current-url"]').attr('content', url);

      localStorage.setItem("cs_user_dashboard_init_tab", $(this).attr('data-tab'));

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

        $('.add-post-wrp').addClass('hidden'); // hide add post section
        $('.posts-wrp').removeClass('hidden'); // show post list section
        $('.edit-post-wrp').addClass('hidden'); // hide post edit section

      });

      $('.subnav__item a').removeAttr('aria-current');
      $(this).attr('aria-current', 'page');
    });

    // init reload previous tab logic
    var init_tab = localStorage.getItem("cs_user_dashboard_init_tab");
    if (init_tab != null && document.referrer == document.location) {
      $('[data-tab="' + init_tab + '"]').trigger('click');
    } else {
      localStorage.setItem("cs_admin_post_init_tab", ""); // clear
    }
  })();
</script>

<script>
(function() {
  // initialize js custom input element event
  var CustomJSInput = function (element)  {
    this.element = element;
    this.target = this.element.getAttribute('target');
    this.targetElement = document.getElementById(this.target);

    initCustomJSInput(this);
    initCustomJSInputEvent(this);
  }

  // initialize element
  function initCustomJSInput(input) {
    input.element.setAttribute('contenteditable', true);
  }

  // initialize event
  function initCustomJSInputEvent(input) {
    // keyboard navigation
    input.element.addEventListener('keydown', function(event){
      if (event.keyCode === 13)
        event.preventDefault();
    });

    input.element.addEventListener('input', function(event){
      if (getCustomInputElementConent(input) === '')
        input.element.innerHTML = '';
      
      if (input.element.hasAttribute('required') && getCustomInputElementConent(input) === '') {
        Util.addClass(input.element, 'form-control--error');
      } else {
        Util.removeClass(input.element, 'form-control--error');
      }

      input.targetElement.value = getCustomInputElementConent(input);
    });
  }

  function getCustomInputElementConent(input) {
    return input.element.innerHTML.replace('<br>', '').trim();
  }

  //initialize the Custom JS Input objects
  var customJSInputElem = document.getElementsByClassName('js-input');
  if( customJSInputElem.length > 0 ) {
    for( var i = 0; i < customJSInputElem.length; i++) {
      (function(i){new CustomJSInput(customJSInputElem[i]);})(i);
    }
  }
}());
</script>

<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.1/tinymce.min.js"></script>
<script>
  function getTiny(urls, sltr){
    var editor_config = {
      path_absolute : urls+"/",
      selector : sltr,
      fontsize_formats: '1pt 2pt 3pt 4pt 5pt 6pt 7pt 8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 17pt 18pt 19pt 20pt 21pt 22pt 23pt 24pt 25pt 26pt 27pt 28pt 29pt 30pt 36pt',
      plugins: [
        "advlist autolink lists link image",
        "wordcount"
      ],
      toolbar: "undo redo | bold underline italic |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
      menu_bar: false,
      image_dimensions: false,
      image_description: false,
      media_live_embeds: true,
      media_alt_source: false,
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'File Manager',
          width : x * 0.8,
          height : y * 0.8,
          resizeble : 'yes',
          close_previous : 'no'
        });
      }

      };

      tinymce.init(editor_config);
  }

  function showNotificationBox(data) {
    $('#notification-box').removeClass('alert--error').removeClass('alert--success');
    $('#notification-box').addClass(data.class);
    $('#notification-box .message').html(data.message);
    $('#notification-box').addClass('alert--is-visible');
  }

  /** Form Fields Validation Module */
  // post tag fields validation
  function validatePostTagFields(form) {
    var isValid = false;

    $tag_elems_wrp = $(form).find('.post-tag-wrp');
    $tag_elems_alert_wrp = $tag_elems_wrp.find('.alert');
    $tag_elems = $tag_elems_wrp.find('select');

    if ($tag_elems.length == 0)
      return true;

    $tag_elems.each(function(idx, elem) {
      if ($(elem).select2('data').length > 0) {
        isValid = true;
      }
    });

    if (isValid) {
      $tag_elems_alert_wrp.removeClass('alert--is-visible');
      $tag_elems.each(function(idx, elem) {
        $(elem).removeClass('form-control--error');
        $(elem).siblings('.select2').find('.select2-selection').removeClass('form-control--error');
      });

    } else {
      $tag_elems_alert_wrp.addClass('alert--is-visible');
      $tag_elems.each(function(idx, elem) {
        $(elem).addClass('form-control--error');
        $(elem).siblings('.select2').find('.select2-selection').addClass('form-control--error');
      });
    }

    return isValid;
  }
  
  function validateCustomSelect(selector) {
    if ($(selector).parents('.post-tag-wrp').length > 0) {
      $form = $(selector).parents('form')[0];
      validatePostTagFields($form);

    } else {
      if ($(selector).prop('required')) { // only when set as required field
        if ($(selector).select2('data').length == 0) {
          $(selector).addClass('form-control--error');
          $(selector).siblings('.select2').find('.select2-selection').addClass('form-control--error');

        } else {
          $(selector).removeClass('form-control--error');
          $(selector).siblings('.select2').find('.select2-selection').removeClass('form-control--error');
        }
      }
    }
  }

  // remove validation error from form
  function clearError($form) {
    $form.find('.form-control--error').each(function(idx, elem) {
      $(elem).removeClass('form-control--error');
    });
    $form.find('.alert--is-visible').each(function(idx, elem) {
      $(elem).removeClass('alert--is-visible');
    });
  }

  // form required fields validation
  function validateItem(elem) {
    var isValid = true;
    switch ($(elem).prop('tagName')) {
      case 'INPUT':
        if ($(elem).prop('type') == 'file') {
          // file control
          $upload_alert_wrp = $('.file-upload .alert');
          if ($(elem).val() == '') {
            $upload_alert_wrp.addClass('alert--is-visible');
            $(elem).addClass('form-control--error');
            $(elem).parent('.ddf__area').addClass('form-control--error');
            isValid = false;

          } else {
            $upload_alert_wrp.removeClass('alert--is-visible');
            $(elem).removeClass('form-control--error');
            $(elem).parent('.ddf__area').removeClass('form-control--error');
          }
          
        } else if ($(elem).prop('type') == 'button' || $(elem).prop('type') == 'submit') {
          // buttons, ignore this
        } else {
          if ($(elem).val() == '') {
            $(elem).addClass('form-control--error');
            isValid = false;
          } else {
            $(elem).removeClass('form-control--error');
          }
        }
        break;
      
      default:
        if ($(elem).hasClass('custom-input')) {
          if ($(elem).html().trim() == '') {
            $(elem).addClass('form-control--error');
            isValid = false;
          } else {
            $(elem).removeClass('form-control--error');
          }
        }
    }

    return isValid;
  }

  $('form').find('[required]').each(function (idx, elem) {
    $(elem).change(function() {
      validateItem($(this));
    });
  });

  function formDataValidation($form) {
    $form.find('[required]').each(function (idx, elem) {
      validateItem(elem);
    });

    validatePostTagFields($form);

    if ($form.find('.form-control--error').length > 0)
      return false;

    return true;
  }  

  var tags_by_category = {!! $tags_by_category !!};

  function matchCustom(params, data) {
    // If there are no search terms, return null to prevent show all tags
    if ($.trim(params.term) === '') {
      return null;
    }

    // Do not display the item if there is no 'text' property
    if (typeof data.text === 'undefined') {
      return null;
    }

    // `params.term` should be the term that is used for searching
    // `data.text` is the text that is displayed for the data object
    if (data.text.toLowerCase().indexOf(params.term) > -1) {
      var modifiedData = $.extend({}, data, true);

      // You can return modified objects from here
      // This includes matching the `children` how you want in nested data sets
      return modifiedData;
    }

    // Return `null` if the term should not be displayed
    return null;
  } 

  function select2ForTags(selector){
    $(selector).select2({
      tags: true,
      hideAdded: true,
      data: tags_by_category[$(selector).attr("data-id")],
      tokenSeparators: [","],
      matcher: matchCustom,
      minimumInputLength: 2
    }).on('select2:opening', function(e){
      var $searchfield = $(selector).parent().find('.select2-search__field');

      if ($searchfield.val() == '')
        return false;
      else
        return true;
    }).on('select2:select', function(e) {
      validateCustomSelect(selector);
    }).on('select2:unselect', function(e) {
      validateCustomSelect(selector);
    });
  }

  $(function(){

    // getTiny('{{ URL::to('/') }}', '#description');

    $('.site-tag-pills').each(function(){
      select2ForTags(this);
    });

    const ImageTool = window.ImageTool;

    var editor = null;
    if ($('#editorjs').length > 0) {
      editor = new EditorJS({
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
    }

    var editor2 = null;
    if ($('#editorjs2').length > 0) {
      editor2 = new EditorJS({
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
    }

    // used editorjs for add post form
    $('.site-editor').on('input click', function(){
      var $this = $(this);

      if($this.data('target-input')){
        console.log('WTF');
        var $targetInput = $($this.data('target-input'));

        editor.save().then((outputData) => {
          // Save data as string
          $targetInput.val(JSON.stringify(outputData));
        }).catch((error) => {
          console.log('Saving failed: ', error);
        });
      }

    });

    // used editorjs for edit post form
    $('#editorjs2, .trigger-site-editor-save').on('input click', function(){
      var $this = $(this);

      if($this.data('target-input')){
        console.log('edit description input');
        var $targetInput = $($this.data('target-input'));

        editor2.save().then((outputData) => {
          // Save data as string
          $targetInput.val(JSON.stringify(outputData));
        }).catch((error) => {
          console.log('Saving failed: ', error);
        });
      }

    });

    $(document).on('click', '#btnSave, #btnPublish', function(){

      if (!formDataValidation($('#formAddPost')))
        return;
      
      var isPublished = ($(this).attr('id') != 'btnSave') ? 1 : 0;
      $('#formAddPost').find('input[name="is_published"]').val(isPublished);
      $('#formAddPost').submit();
    });

    $(document).on('click', '#closeEditModal', function(){
      $('#modal-edit-post').removeClass('modal--is-visible');
    });

    // add new post link
    $(document).on('click', '.btn-new-post', function() {
      clearError($('#formAddPost'));

      $('.add-post-wrp').removeClass('hidden'); // show add post section
      $('.posts-wrp').addClass('hidden'); // hide post list section
      $('.edit-post-wrp').addClass('hidden'); // hide post edit section

      $('.subnav a[aria-current]').attr('aria-current', '');
    });

    // cancel post add/edit link
    $(document).on('click', '.btn-cancel-post', function() {
      $('.add-post-wrp').addClass('hidden'); // hide add post section
      $('.posts-wrp').removeClass('hidden'); // show post list section
      $('.edit-post-wrp').addClass('hidden'); // hide post edit section

      $('.subnav a[aria-current]').attr('aria-current', 'page');
    });
    
    $(document).on('click', 'td[aria-controls="modal-edit-post"]', function(){

      var postId = $(this).attr('data-id');
      var editUrl = "dashboard/" + postId + "/fetch-data";

      // Clear form
      $('#formEditPost').get(0).reset();
      // $('#editTags').val('').trigger('change');
      $('.site-tag-pills').each(function(){
        $(this).val('').trigger('change');
      });
      // tinymce.remove('#editDescription');
      editor2.clear(); // used editorjs for edit post form

      $.ajax({
        url: editUrl,
        dataType: 'json',
        type: 'get',
        success: function(response) {
          if (response.status === false) {
            showNotificationBox(response);
            return;
          }
          
          var allTagsPerCategory = JSON.parse(response.tags);

          for (let i = 0; i < allTagsPerCategory.length; i++) {
            const tagCategory = allTagsPerCategory[i];
            $('#edit_tag_category_'+tagCategory.tag_category_id).html(tagCategory.tags);
          }

          if (response.description) {
            var editorData = JSON.parse(response.description);
            editor2.render(editorData);
            $('#editDescription').val(response.description);
          }

          $('#editTitle').val(response.title);
          $('#editTitleElem').html(response.title);
          $('#editDescription').val(response.description);
          $('#thumbnailPreview').attr('src', response.thumbnail);
          // $('#editTags').html(response.tags);
          $('#postId').val(postId);

          if(response.is_published == 1 && response.is_deleted != 1){
            $(document).find('.publish-post-link').addClass('is-hidden');
            $(document).find('.restore-post-link').addClass('is-hidden');

            $(document).find('.draft-post-link').attr('href', '/dashboard/' + response.id + '/make-draft');
            $(document).find('.draft-post-link').removeClass('is-hidden');
          }

          if(response.is_published != 1 && response.is_deleted != 1){
            $(document).find('.draft-post-link').addClass('is-hidden');
            $(document).find('.restore-post-link').addClass('is-hidden');

            $(document).find('.publish-post-link').attr('href', '/dashboard/' + response.id + '/publish');
            $(document).find('.publish-post-link').removeClass('is-hidden');
          }

          if(response.is_deleted == 1){
            // Hide the Draft and Publish button
            $(document).find('.draft-post-link').addClass('is-hidden');
            $(document).find('.publish-post-link').addClass('is-hidden');

            // Show restore button
            $(document).find('.restore-post-link').attr('href', '/dashboard/' + response.id + '/restore');
            $(document).find('.restore-post-link').removeClass('is-hidden');
          }

          // select2ForTags('#editTags');
          $('.site-tag-pills').each(function(){
            select2ForTags(this);
          });

          clearError($('#formEditPost'));

          $('.add-post-wrp').addClass('hidden'); // hide add post section
          $('.posts-wrp').addClass('hidden'); // hide post list section
          $('.edit-post-wrp').removeClass('hidden'); // show post edit section

          $('.subnav a[aria-current]').attr('aria-current', '');

          // getTiny('{{ URL::to('/') }}', '#editDescription');
        }
      });

      $('#modal-edit-post').addClass('modal--is-visible');
    });

    function savePost(e) {
      e.preventDefault();

      if (!formDataValidation($('#formEditPost')))
        return;

      var published = $(this).data('toggle-published');

      $('#formEditPost').find('input[name="is_published"]').val(published);
      $('#formEditPost').submit();
    }

    $(document).on('click', '#btnEditSave', savePost);
    $(document).on('click', '#btnEditSaveDraft', savePost);
    $(document).on('click', '#btnEditSavePublish', savePost);

    // Single post delete
    $(document).on('click', '.btn-delete', function(){
      if(confirm("Are you sure you want to delete this post?")){
        $(this).closest('form').submit();
      }
    });

    // Multiple post delete
    $(document).on('click', '#btnDeleteMultiple', function(){
      if(confirm("Are you sure you want to delete these posts?")){
        $('#form-bulk-delete').submit();
      }
    });

    $(document).on('click', '#closeRejectModal', function(){
      $('#modal-reject-post').removeClass('modal--is-visible');
    });

    // Reject Post
    $(document).on('click', 'td[aria-controls="modal-reject-post"]', function(){
      $('#modal-reject-post').addClass('modal--is-visible');

      var postId = $(this).attr('data-id');
      $('#postId').val(postId);
      $('#rejectMsg').val("").focus();
    });

    function rejectPost(e) {
      e.preventDefault();

      if (!formDataValidation($('#formRejectPost')))
        return;

      var $this = $(this);

      $(this).html("Please wait...");

      var formData = new FormData($('#formRejectPost')[0]);
      formData.append('id', $('#postId').val());
      formData.append('message', $('#rejectMsg').val());

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
      });

      $.ajax({
        url: "{{ route('posts.reject') }}",
        dataType: 'json',
        type: 'post',
        contentType: false,
        processData: false,
        data: formData,
        success: function(response){
          location.reload();
        }
      });
    }
    $(document).on('click', '#btnReject', rejectPost);

    // Trash icon badge update
    $(document).on('click', '.checkbox-delete', function(){
      var checkPostCount = 0;

      $('.checkbox-delete').each(function(){
        if($(this).is(':checked')){
          checkPostCount++
        }
      });

      if($('.checkbox-delete:checked').length){
        $(document).find('#btnRefreshTable').addClass('is-hidden');
        $(document).find('#btnDeleteMultiple').removeClass('is-hidden');
      } else {
        $(document).find('#btnRefreshTable').removeClass('is-hidden');
        $(document).find('#btnDeleteMultiple').addClass('is-hidden');
      }

      $('#deleteBadge').html(checkPostCount);
    });

    // Check all boxes when the checkall box checkbox is checked
    $(document).on('click', '#checkboxDeleteAll', function(){
      var table = $(this).parents('table')[0];
      if($(this).is(':checked')){
        $(table).find('.checkbox-delete').prop('checked', true);
      } else {
        $(table).find('.checkbox-delete').prop('checked', false);
      }

      var checkPostCount = 0;

      $(table).find('.checkbox-delete').each(function(){
        if($(this).is(':checked')){
          checkPostCount++
        }
      });

      $('#deleteBadge').html(checkPostCount);

      if($(table).find('.checkbox-delete:checked').length){
        $(document).find('#btnRefreshTable').addClass('is-hidden');
        $(document).find('#btnDeleteMultiple').removeClass('is-hidden');
      } else {
        $(document).find('#btnRefreshTable').removeClass('is-hidden');
        $(document).find('#btnDeleteMultiple').addClass('is-hidden');
      }

    });

    // Clean trash
    $(document).on('click', '#emptyTrash', function(){
      if(confirm('Are you sure you want to empty the trash?')){
        $(this).closest('form').submit();
      }
    });

    // var ddf = document.getElementsByClassName('ddf')[0];
    // if( ddf ) new Ddf({element: ddf});

    $(document).on('change', '#upload-file', function(){
      var ddfArea = $(this).closest('.ddf__area');

      ddfArea.addClass('ddf__area--file-dropped');
      ddfArea.find('.js-ddf__files-counter').html("1 selected file");
    });

    $(document).on('click', '.btn-full-screen', function(){
      var modalContent = $(this).closest('.modal__content');
      modalContent.toggleClass('max-width-sm');

      var hasClass = $(this).closest('.max-width-sm').length;

      if(hasClass){
        $(this).html('Full Screen');
        $('#modal-add-article').removeClass('padding-0');
        $('#modal-reject-post').removeClass('padding-0');
        modalContent.removeClass('radius-0');
      } else {
        $(this).html('Shrink Screen');
        $('#modal-add-article').addClass('padding-0');
        $('#modal-reject-post').addClass('padding-0');
        modalContent.addClass('radius-0');
      }

    });
  });
</script>
@endauth
