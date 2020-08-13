@extends('admin::layouts.master')
@section('content')
@include('article::partials.modals')
@include('article::partials.alert-modal')
  <div class="container max-width-lg">
    <div class="grid gap-md@md">
      @include('article::partials.sidebar')
      <main class="position-relative padding-top-md z-index-1 col-12@md">
          @include('article::partials.control')
          @include('article::partials.table')
        </div><!-- /#site-table-with-pagination-container -->
      </main>
    </div><!-- /.grid -->
  </div><!-- /.container -->
</section>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/raw@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>

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
      }
    }
  });
  })();
</script>

@endsection