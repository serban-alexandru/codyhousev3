<div class="masonry js-masonry js-infinite-scroll container max-width-lg margin-top-md" data-path="{{ url('/api/' . $api_route . '/page/{n}') }}" data-container=".js-infinite-scroll__content" data-current-page="1" data-load-btn="off">
  <div class="masonry__loader" aria-hidden="true">
    <svg class="icon icon--md icon--is-spinning" viewbox="0 0 32 32">
      <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none">
        <circle cx="16" cy="16" r="15" opacity="0.4"></circle>
        <path d="M16,1A15,15,0,0,1,31,16" stroke-linecap="butt"></path>
      </g>
    </svg>
  </div>
  <ul class="masonry__list js-masonry__list js-infinite-scroll__content">
  @foreach($posts as $post)
    <li class="masonry__item js-masonry__item post">
    @if($post->video)
      @php
        $video_extension = substr($post->video, strrpos($post->video, '.') + 1);
        $video_type = $video_extension == 'mp4' ? 'video/mp4' : ($video_extension == 'webm' ? 'video/webm' : '' );
      @endphp
      <video id="video-player-{{$post->id}}" class="video-js video-small vjs-big-play-centered video-player" width="320" height="150" data-setup='{"controls": true, "autoplay": false, "preload": "auto"}' poster="{{ $post->showThumbnail('medium') }}">
        <source src="{{ $post->showVideo($post->video) }}" type="{{ $video_type }}" />
        <p class="vjs-no-js">
          To view this video please enable JavaScript, and consider upgrading to a
          web browser that
          <a href="https://videojs.com/html5-video-support/" target="_blank"
            >supports HTML5 video</a
          >
        </p>
      </video>
    @elseif($post->thumbnail)
      <a class="thumb" href="{{ route('single-post-view', ['slug'   => $post->slug]) }}">
        <figure class="card-v2">
          <img class="block width-500% radius-md radius-bottom-right-0 radius-bottom-left-0" src="{{ $post->showThumbnail('medium') }}" alt="Image of {{ $post->title }}">
          <figcaption class="card-v2__caption padding-x-sm padding-top-md padding-bottom-sm text-left">

          </figcaption>
        </figure>
      </a>
    @else
      <span class="card__img card__img-cropped bg-opacity-50%"></span>
      <div class="post-cell text-component line-height-xs v-space-xxs text-sm line-height-md">
       
      </div>
    @endif
      <div class="user-cell">
          <h3 class="text-xs padding-xs@md text-md@md"><a class="color-contrast-low" href="{{ route('single-post-view', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h3>
      </div>
    </li>  
  @endforeach
  </ul>

  <div class="text-center margin-y-md is-hidden js-infinite-scroll__loader" aria-hidden="true">
    <svg class="icon icon--md icon--is-spinning" viewBox="0 0 32 32"><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none"><circle cx="16" cy="16" r="15" opacity="0.4"></circle><path d="M16,1A15,15,0,0,1,31,16" stroke-linecap="butt"></path></g></svg>
  </div>

  <div class="margin-top-md flex justify-center">
    <button class="btn btn--primary js-infinite-scroll__btn">Load More</button>
  </div>
</div>

@push('module-styles')
<!-- MODULE'S CUSTOM Style -->
  @include('custom-scripts.custom-style')
@endpush

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('custom-scripts.masonry-scroll')
@endpush