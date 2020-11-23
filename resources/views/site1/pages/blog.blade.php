@extends('site1.layouts.app')
@section('content')

<article class="padding-bottom-lg">
  <div class="t-article-v2__hero">
    <div
      class="t-article-v2__cover"
      aria-hidden="true"
      @if($post->thumbnail)
        style="background-image: url('{{ $post->showThumbnail() }}');"
      @endif
    ></div>

    <div class="t-article-v2__intro container max-width-adaptive-sm">
      <div class="text-component text-center">
        <h1 class="text-xxxl">{{ $post->title }}</h1>
        <p class="text-sm">
          By
          <a href="{{ route('pages.profile.user', $post->user->username) }}">
            {{ $post->user->name }}
          </a>
        </p>
      </div>

      <div class="t-article-v2__divider margin-top-lg" aria-hidden="true"><span></span></div>
    </div>
  </div>

  <div class="container max-width-adaptive-sm">
    <div class="line-height-sm v-space-sm">
      <div class="sticky-banner bg shadow-sm js-sticky-banner" data-target-in="#sticky-banner-target">
        <section class="socials text-right">
          <div class="container max-width-sm">
            <div class="padding-sm margin-xxxxs">

            <ul class="socials__btns flex flex-center gap-sm flex-wrap">

              <li>
                Share:
              </li>

              <li>
                <a href="#0">
                  <svg class="icon" viewBox="0 0 32 32"><title>Follow us on Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
                </a>
              </li>

              <li>
                <a href="#0">
                  <svg class="icon" viewBox="0 0 32 32"><title>Follow us on Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
                </a>
              </li>

            </ul>
          </div>
        </section>
      </div>

      <section class="max-height-100vh bg-contrast-lower" id="sticky-banner-target">
      </section>

      <div class="container max-width-sm padding-y-md">
        <div class="text-component line-height-lg v-space-md">
          <x-editorjs-block :data="$post->description" />
        </div>
      </div>

<!-- Begin Comments -->
    
<!-- End Comments -->
  </div>
</section>
@endsection