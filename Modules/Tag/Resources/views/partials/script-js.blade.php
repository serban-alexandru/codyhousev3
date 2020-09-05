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