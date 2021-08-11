<section class="margin-top-md">
    <div class="drag-gallery js-drag-gallery container max-width-adaptive-lg">
      <ul class="drag-gallery__list drag-gallery__list-align-top gap-md">
        @foreach($posts as $post)
            <li class="drag-gallery__item">
                <div class="card shadow-none">
                @if($post->video)
                    <div class="video-wrap">
                        <video id="video-player-{{$post->id}}" class="video-js video-small vjs-big-play-centered video-player" width="320" height="150" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "fluid": true}' poster="{{ $post->showThumbnail('medium') }}">
                            <source src="{{ $post->video }}" type="{{ $post->video_type }}" />
                            <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                                >supports HTML5 video</a
                            >
                            </p>
                        </video>
                    </div>            
                @elseif($post->thumbnail)
                        <a src="
                            {{
                                route(
                                    'single-post-view',
                                    [
                                        'slug'   => $post->slug
                                    ]
                                )
                            }}
                        " draggable="false" ondragstart="return false;" class="card__img card__img-cropped j-draggable">
                            <img src="{{ $post->showThumbnail('medium') }}" alt="Image of {{ $post->title }}">
                        </a>
                    @else
                        <span class="card__img card__img-cropped bg-black bg-opacity-50%"></span>
                    @endif

                    <div class="card__content">
                    <div class="featured__headline">
                        <h4 class="margin-bottom-md">
                        <a src="
                            {{
                                route(
                                    'single-post-view',
                                    [
                                        'slug'   => $post->slug
                                    ]
                                )
                            }}
                        " class="j-draggable" draggable="false" ondragstart="return false;">
                            {{ $post->title }}
                        </a>
                        </h4>
                        @if($post->description)
                            <div class="text-sm color-contrast-medium">
                            {!! $post->description !!}
                            </div>
                        @else
                        <p>&nbsp;</p>
                        @endif
                    </div>

                    <div class="author author--meta margin-top-md">
                        @if($post->user->hasAvatar())
                            <a href="{{ route('pages.profile.user', $post->user->username) }}" class="author__img-wrapper" draggable="false" ondragstart="return false;">
                                <img src="{{ $post->user->getAvatar() }}" alt="Author picture">
                            </a>
                        @else
                            <span class="author__img-wrapper"></span>
                        @endif

                        <div class="featured__headline v-space-xxs">
                            <h4 class="text-sm">
                                <a href="{{ route('pages.profile.user', $post->user->username) }}" rel="author" draggable="false" ondragstart="return false;">
                                    {{ $post->user->name }}
                                </a>
                            </h4>
                            <p class="text-sm color-contrast-medium">
                                <time datetime="{{ $post->created_at->format('Y-m-d') }}">
                                    {{ $post->created_at->format('F d, Y') }}
                                </time>
                                &mdash; 5 min read
                            </p>
                        </div>
                    </div>

                    </div>
                </div>
            </li>
        @endforeach

      </ul>
      <div class="custom-drag-gallery-end-overlay right"></div><!-- /.custom-gallery-end-overlay -->
    </div><!-- /.drag-gallery js-drag-gallery container max-width-adaptive-lg -->
  </section>