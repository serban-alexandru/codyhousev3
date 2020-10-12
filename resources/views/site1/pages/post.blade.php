@extends('site1.layouts.app')

@section('content')
  <article class="container max-width-adaptive-sm margin-top-lg article text-component">
      <h1>{{ ($post->seo_page_title) ? $post->seo_page_title : $post->title }}</h1>
    
      <p>
        {!! html_entity_decode($post->description) !!}
      </p>
     
      <div class="text-component__block text-component__block--outset">
          <figure class="media-wrapper">
            <img src="{{ asset('storage/posts/images') }}/{{ $post->thumbnail }}" alt="Post's Image">
          </figure>
        </div>

          <div class="flex flex-wrap gap-xxs">
            @if(!is_null($post->tags))
              @foreach(explode(',', $post->tags) as $tag)
                <span class="btn btn--basic">{{ $tag }}</span>
              @endforeach
            @else
            
            @endif
          </div>

    </article>
  @endsection

@section('before-end')
  <script>
      var documentTitle = "{{ ($post->seo_page_title) ? $post->seo_page_title : $post->title }}";
      $('title').html(documentTitle);
  </script>
@endsection
