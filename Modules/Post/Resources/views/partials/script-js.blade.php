@auth

<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
{{--
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
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
  })();
</script>
 --}}

<script>
  (function(){

    // load content when user clicked on sidebar links
    $(document).on('click', '.ajax-link', function (e) {
      e.preventDefault();
      var $this = $(this);
      var url = $this.attr('href');

      $('meta[name="current-url"]').attr('content', url);

      // loads page content inside this element
      $('#site-table-with-pagination-container').load(url);

      $('.sidenav__item a').removeAttr('aria-current');
      $(this).attr('aria-current', 'page');
    });

  })();
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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

  function select2ForTags(selector){
    $(selector).select2({
      tags: true,
      tokenSeparators: [",", " "]
    }).on('select2:open', function(e){
      $('.select2-container--open .select2-dropdown--below').css('display','none');
    });
  }

  $(function(){

    getTiny('{{ URL::to('/') }}', '#description');

    select2ForTags('#tags');

    $(document).on('click', '#btnSave, #btnPublish', function(){
        $(this).html('Please wait...');
        var isPublished = ($(this).attr('id') != 'btnSave') ? 1 : 0;
        var formData = new FormData($('#formAddPost')[0]);
        formData.append('is_published', isPublished);
        formData.append('description', tinyMCE.activeEditor.getContent());

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
          }
        });

        $.ajax({
          url: "{{ route('posts.store') }}",
          dataType: 'json',
          type: 'post',
          contentType: false,
          processData: false,
          data: formData,
          success: function(response){
            location.reload();
          }
        });
    });

    $(document).on('click', '#closeEditModal', function(){
      $('#modal-edit-post').removeClass('modal--is-visible');
    });

    $(document).on('click', 'td[aria-controls="modal-edit-post"]', function(){

      var postId = $(this).attr('data-id');
      var editUrl = "posts/" + postId + "/fetch-data";

      // Clear form
      $('#formEditPost').get(0).reset();
      $('#editTags').val('').trigger('change');
      tinymce.remove('#editDescription');

      $.ajax({
        url: editUrl,
        dataType: 'json',
        type: 'get',
        success: function(response){
          $('#editTitle').val(response.title);
          $('#editDescription').val(response.description);
          $('#thumbnailPreview').attr('src', response.thumbnail);
          $('#editPageTitle').val(response.page_title);
          $('#editTags').html(response.tags);
          $('#postId').val(postId);
          select2ForTags('#editTags');
          getTiny('{{ URL::to('/') }}', '#editDescription');
        }
      });

      $('#modal-edit-post').addClass('modal--is-visible');
    });

    $(document).on('click', '#btnEditSave', function(){
      $(this).html("Please wait...");

      var formData = new FormData($('#formEditPost')[0]);
      formData.append('description', tinyMCE.activeEditor.getContent());
      formData.append('id', $('#postId').val());

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
      });

      $.ajax({
        url: "{{ route('posts.update') }}",
        dataType: 'json',
        type: 'post',
        contentType: false,
        processData: false,
        data: formData,
        success: function(response){
          location.reload();
        }
      });
    });

    // Single post delete
    $(document).on('click', '.btn-delete', function(){
      if(confirm("Are you sure you want to delete this post?")){
        $(this).closest('form').submit();
      }
    });

    // Multiple post delete
    $(document).on('click', '#btnDeleteMultiple', function(){

      if(confirm("Are you sure you want to delete these posts?")){
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
          }
        });

        var postIds = [];

        $('.checkbox-delete').each(function(){
          if($(this).is(':checked')){
            postIds.push($(this).attr('value'));
          }
        });

        $.ajax({
          url: "{{ route('posts.delete.multiple') }}",
          dataType: 'json',
          type: 'post',
          data: {
            post_ids: postIds
          },
          success: function(response){
            location.reload();
          }
        });
      }

    });

    // Trash icon badge update
    $(document).on('click', '.checkbox-delete, #checkboxDeleteAll', function(){
      var checkPostCount = 0;

      $('.checkbox-delete').each(function(){
        if($(this).is(':checked')){
          checkPostCount++
        }
      });

      $('#deleteBadge').html(checkPostCount);
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

  });
</script>
@endauth
