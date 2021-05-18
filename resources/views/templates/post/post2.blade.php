@extends('templates.layouts.index')

<?php $page_title = ($settings_data['post_page_title']) ? $settings_data['post_page_title'] : $post->title; ?>
<?php $meta_title = ($settings_data['post_meta_title']) ? $settings_data['post_meta_title'] : $post->title; ?>

@isset($page_title)
  @section('title-tag'){!! $page_title !!}@endsection
@endisset

@isset($meta_title)
  @section('meta-title-tag'){!! $meta_title !!}@endsection
@endisset

@section('content')

<article class="padding-y-lg">
  <header class="container max-width-md margin-bottom-lg">
    <div class="text-component text-center line-height-lg v-space-md margin-bottom-md text-sm">
      <h1>It was going to be a lonely trip back</h1>
      <p class="color-contrast-medium text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni harum rerum amet.</p>
      <figure class="">
        <img src="{{ $post->showThumbnail('medium') }}" alt="Image of {{ $post->title }}">

        <div class="author__content">
          <h4 class="stories__metadata">
              by:
              <a href="{{ route('pages.profile.user', $post->user->username) }}" rel="author">
                  {{ $post->user->name }}
              </a>
          </h4>
      </div>

        <span>
          @php
            $tag_pills = $post->getTagNames();
          @endphp
          @foreach($tag_pills as $tag_pills_key => $tag_pill_name)
              <a
                href="{{ route('pages.tags', $tag_pill_name) }}"
                class="btn color-contrast-medium post-thumbnail-tags-pill margin-xxxs margin-top-md"
                draggable="false" ondragstart="return false;"
              >
                {{ $tag_pill_name }}
              </a>
              @if($tag_pills_key < count($tag_pills) - 1)
              @endif
          @endforeach
        </span>

    </figure>
    </div>

 
</article>

@endsection