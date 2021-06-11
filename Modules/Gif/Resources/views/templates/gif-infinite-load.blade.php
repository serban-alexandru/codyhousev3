@if($nextpage > 0)
<div class="js-infinite-scroll__content" data-path="{{ url('/api/gif/' . $gif->id . '/page={n}') }}" data-current-page="{{ $nextpage }}">
@else
<div class="js-infinite-scroll__content">
@endif
  @if($gif)
  <!-- Start of each gif content -->
  <article class="container single-post max-width-md margin-bottom-lg padding-y-lg" data-title="{!! $gif->seo_title !!}" data-url="{{ url($gif->url) }}">
    <div class="text-component text-center line-height-lg v-space-md margin-bottom-md text-sm">
      <h1>{{ $gif->title }}</h1>
      <p class="color-contrast-medium text-md">{!! $gif->description !!}</p>
      <figure class="">
        <img src="{{ $gif->showThumbnail('original', 'gif') }}" alt="Image of {{ $gif->title }}">

        <div class="author__content">
          <h4 class="story-v2__meta text-sm">
            by:
            <a href="{{ route('pages.profile.user', $gif->user->username) }}" rel="author">
              {{ $gif->user->name }}
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
  </article> <!-- End of each gif content --> 
  @endif
</div>