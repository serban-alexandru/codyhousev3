@if($nextpage > 0)
<div class="js-infinite-scroll__content" data-path="{{ url('/api/post/' . $post->id . '/page={n}') }}" data-current-page="{{ $nextpage }}">
@else
<div class="js-infinite-scroll__content">
@endif
  @if($post)
  <!-- Start of each post content -->
  <article class="container single-post max-width-sm margin-bottom-lg padding-y-lg" data-title="{!! $post->seo_title !!}" data-url="{{ url($post->url) }}">
    <div class="text-component text-left line-height-lg v-space-md margin-bottom-md text-sm">
      <h1>{{ $post->title }}</h1>
      <p class="color-contrast-medium text-md">{!! $post->description !!}</p>
      <figure class="">
        <img src="{{ $post->showThumbnail() }}" alt="Image of {{ $post->title }}">

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
  @endif
</div>