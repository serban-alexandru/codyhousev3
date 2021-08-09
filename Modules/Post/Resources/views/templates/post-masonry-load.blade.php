@if($nextpage > 0)
<ul class="js-infinite-scroll__content" data-path="{{ url('/api/' . $api_route . '/page={n}') }}" data-current-page="{{ $nextpage }}">
@else
<ul class="js-infinite-scroll__content">
@endif
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
