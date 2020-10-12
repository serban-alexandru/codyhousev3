@extends('site1.layouts.app')

<?php $page_title = ($post->seo_page_title) ? $post->seo_page_title : $post->title; ?>

@section('title-tag'){{ $page_title }}@endsection

@section('content')
  <article class="container max-width-adaptive-sm margin-top-lg article text-component">
    <h1>{{ $page_title }}</h1>
  
    <p>
      {!! html_entity_decode($post->description) !!}
    </p>
   
    <div class="text-component__block text-component__block--outset">
      <img src="{{ asset('storage/posts/images') }}/{{ $post->thumbnail }}" alt="Post's Image">
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
