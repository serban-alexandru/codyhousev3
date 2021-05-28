<div class="js-infinite-scroll container max-width-lg margin-top-md" data-path="{{ url('/api/' . $post->locale . '/post/' . $post->id . '/{n}') }}" data-container=".js-infinite-scroll__content" data-current-page="1" data-load-btn="off">
  <!-- Start of infinite scroll post container -->
  <div class="js-infinite-scroll__content">
    <!-- Start of each post content -->
    <article class="container single-post max-width-md margin-bottom-lg padding-y-lg" data-title="{!! $post->seo_title !!}" data-url="{{ url($post->url) }}">
      <div class="text-component text-center line-height-lg v-space-md margin-bottom-md text-sm">
        <h1>{{ $post->title }}</h1>
        <p class="color-contrast-medium text-md">{!! $post->description !!}</p>
        <figure class="">
          <img src="{{ $post->showThumbnail('medium') }}" alt="Image of {{ $post->title }}">

          <div class="author__content">
            <h4 class="story-v2__meta text-sm">
              by:
              <a href="{{ route('pages.profile.user', $post->user->username) }}" rel="author">
                {{ $post->user->name }}
              </a>
            </h4>
          </div>

          <span>
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
    </article> <!-- End of each post content -->  
  </div> <!-- End of infinite scroll post container -->

  <div class="text-center margin-y-md is-hidden js-infinite-scroll__loader" aria-hidden="true">
    <svg class="icon icon--md icon--is-spinning" viewBox="0 0 32 32"><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none"><circle cx="16" cy="16" r="15" opacity="0.4"></circle><path d="M16,1A15,15,0,0,1,31,16" stroke-linecap="butt"></path></g></svg>
  </div>

  <div class="margin-top-md flex justify-center">
    <button class="btn btn--primary js-infinite-scroll__btn">Load More</button>
  </div>

</div>

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('custom-scripts.infinite-post-scroll')
@endpush
