@extends('site1.layouts.app')
@section('content')
<section class="margin-top-md">
    <div class="container max-width-adaptive-lg">
      <p class="text-xl margin-bottom-md">{{ $page_title }}</p>
      <ul class="grid-auto-md gap-md">
      @foreach($posts as $key => $post)
        <li>
          <a href="#0" class="card-v8 bg radius-lg">
            <figure>
              @if($post->thumbnail)
                <img src="{{ $post->showThumbnail() }}" alt="Image of {{ $post->title }}">
              @else
                <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Image description">
              @endif
            </figure>

            <footer class="padding-sm">
              <p class="text-sm color-contrast-medium margin-bottom-sm">
                {{ $post->title }}
              </p>
              <div class="text-component">
                <h4>
                  <span class="card-v8__title text-sm">
                    <x-editorjs-block :data="$post->description" :excerpt="true" />
                  </span>
                </h4>
              </div>
            </footer>
          </a>
        </li>
      @endforeach
      </ul>
    </div>
  </section>
@endsection