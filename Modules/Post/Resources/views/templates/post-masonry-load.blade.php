@if($nextpage > 0)
<ul class="js-infinite-scroll__content" data-path="{{ url('/api/' . $api_route . '/page={n}') }}" data-current-page="{{ $nextpage }}">
@else
<ul class="js-infinite-scroll__content">
@endif
  @if( isset($type) && $type != 'tag' )
    @foreach($posts as $post)
      <li class="masonry__item js-masonry__item {{ $post->post_type }}">
      @if($post->thumbnail)
        <a class="thumb" href="{{ route('single-' . $post->post_type . '-view', ['slug'   => $post->slug]) }}">
          <figure class="card-v2">
            <img class="block width-500% radius-md radius-bottom-right-0 radius-bottom-left-0" src="{{ $post->showThumbnail('medium', $post->post_type) }}" alt="Image of {{ $post->title }}">
            <figcaption class="card-v2__caption padding-x-sm padding-top-md padding-bottom-sm text-left">
              <div class="card-v2__title text-base@md"><a class="color-contrast-lower" href="{{ route('single-' . $post->post_type . '-view', ['slug' => $post->slug]) }}">{{ $post->title }}</a></div>
            </figcaption>
          </figure>
        </a>
      @else
        <span class="card__img card__img-cropped bg-opacity-50%"></span>
        <div class="post-cell text-component line-height-xs v-space-xxs text-sm line-height-sm">
          <p><a class="color-contrast-low" href="{{ route('single-' . $post->post_type . '-view', ['slug' => $post->slug]) }}">{{ $post->title }}</a></p>
        </div>
      @endif
        <div class="user-cell">
          <div class="user-cell__body">
            <figure aria-hidden="true">
              <a href="{{ route('pages.profile.user', $post->username) }}">
                @if(! is_null($post->avatar))
              
                  <div class="author--meta padding-top-xxxxs">
                    <a href="{{ route('pages.profile.user', $post->username) }}" class="author__img-wrapper">
                      <img class="user-cell__img" src="{{ asset('storage/users-images/avatars') . '/' . $post->avatar }}" alt="User profile image">
                    </a>
                  </div>
              
                @else
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 25 25">
                  <title>face-man</title>
                  <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(0.5 0.5)"
                    fill="#a8a8a8" stroke="#a8a8a8">
                    <path fill="none" stroke-miterlimit="10"
                      d="M1.051,10.933 C4.239,6.683,9.875,11.542,16,6c3,4.75,6.955,4.996,6.955,4.996"></path>
                    <circle data-stroke="none" fill="#a8a8a8" cx="7.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                      stroke-linecap="square" stroke="none"></circle>
                    <circle data-stroke="none" fill="#a8a8a8" cx="16.5" cy="14.5" r="1.5" stroke-linejoin="miter"
                      stroke-linecap="square" stroke="none"></circle>
                    <circle fill="none" stroke="#a8a8a8" stroke-miterlimit="10" cx="12" cy="12" r="11"></circle>
                  </g>
                </svg>
                @endif
              </a>
            </figure>
            <div class="user-cell__content text-component line-height-xs v-space-xxs text-sm line-height-md">
              <p><a class="color-contrast-low text-sm" href="{{ route('pages.profile.user', $post->username) }}">{{ $post->username }}</a></p>
              <p class="color-contrast-medium text-xs">{{ $post->created_at->format('F j, Y') }}</p>
            </div>
          </div>
        </div>
      </li>
    @endforeach
  @else <!-- Posts by Tag -->
    @foreach($posts as $post)
      <li class="masonry__item js-masonry__item {{ $post->post_type }}">
        <span class="card-v8 card-masonry bg radius-lg">
          <a href="
            {{
                route(
                    'single-' . $post->post_type . '-view',
                    [
                        'slug'   => $post->slug
                    ]
                )
            }}
          ">
          @if($post->thumbnail)
            <figure class="card__img">
              <img src="{{ $post->showThumbnail('medium', $post->post_type) }}" alt="Image of {{ $post->title }}">
            </figure>
          @else
            <span class="card__img card__img-cropped bg-black bg-opacity-50%"></span>
          @endif
          </a>

          <footer class="padding-sm">
            <p class="text-sm color-contrast-medium margin-bottom-sm post-thumbnail-tags-sm">
              <span>
                @php
                  $tag_pills = $post->getTagNames();
                @endphp
                @foreach($tag_pills as $tag_pills_key => $tag_pill_name)
                  <a
                    href="{{ route('pages.tags', $tag_pill_name) }}"
                    class="color-contrast-medium post-thumbnail-tags-pill"
                    draggable="false" ondragstart="return false;"
                  >
                    {{ $tag_pill_name }}
                  </a>
                  @if($tag_pills_key < count($tag_pills) - 1)
                      ,
                  @endif
                @endforeach
              </span>
            </p>
            <div class="text-component">
              <h4>
                <a href="{{
                  route(
                      'single-' . $post->post_type . '-view',
                      [
                          'slug'   => $post->slug
                      ]
                  )
                  }}" class="color-contrast-higher card-v8__title text-sm">
                  {{ $post->title }}
                </a>
              </h4>
            </div>
          </footer>
        </span>
      </li>      
    @endforeach  
  @endif
</ul>