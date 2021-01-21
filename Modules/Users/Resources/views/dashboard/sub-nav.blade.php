<div class="bg-contrast-lower">
  <div class="container max-width-lg flex items-center justify-between">
    <div class="">
      <button class="btn btn--primary margin-right-md" aria-controls="modal-add-article">Add</button>
            
      <form class="expandable-search js-expandable-search" action="{{ url('dashboard') }}" method="GET">
        <label class="sr-only" for="expandable-search">Search</label>
        <input class="reset expandable-search__input js-expandable-search__input" type="search" name="postsearch" id="expandable-search" placeholder="Search..." required>
        <button type="submit" class="reset expandable-search__btn">
          <svg class="icon" viewBox="0 0 24 24">
            <title>Search</title>
            <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10">
              <line x1="21" y1="21" x2="15.656" y2="15.656" />
              <circle cx="10" cy="10" r="8" />
            </g>
          </svg>
        </button>
      </form>
    </div>
    <div class="subnav subnav--expanded@sm js-subnav">
      <button class="reset btn btn--subtle margin-y-sm subnav__control js-subnav__control">
        <span>Panel</span>
        <svg class="icon icon--xxs margin-left-xxs" aria-hidden="true" viewBox="0 0 12 12">
          <polyline points="0.5 3.5 6 9.5 11.5 3.5" fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></polyline>
        </svg>
      </button>

      <div class="subnav__wrapper js-subnav__wrapper">
        <nav class="subnav__nav ">
          <button class="reset subnav__close-btn js-subnav__close-btn js-tab-focus" aria-label="Close navigation">
            <svg class="icon" viewBox="0 0 16 16">
              <g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                <line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line>
                <line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line>
              </g>
            </svg>
          </button>

          <ul class="subnav__list">
            <li class="subnav__item"><a href="{{ url('/dashboard') }}" class="subnav__link ajax-link" {{ (url('/dashboard') == url()->full()) ? 'aria-current=page' : '' }}>Published<span class="padding-left-sm sidenav__counter">{{ $posts_published_count }} <i class="sr-only">notifications</i></span></a></li>
            <li class="subnav__item"><a href="{{ url('/dashboard?is_draft=1') }}" class="subnav__link ajax-link">Draft<span class="padding-left-sm sidenav__counter">{{ $posts_draft_count }} <i class="sr-only">notifications</i></span></a></li>
            @if (!auth()->user()->isEditor())
            <li class="subnav__item"><a href="{{ url('/dashboard?is_pending=1') }}" class="subnav__link ajax-link">Pending<span class="padding-left-sm sidenav__counter">{{ $posts_pending_count }} <i class="sr-only">notifications</i></span></a></li>
            @endif
            <li class="subnav__item"><a href="{{ url('/dashboard?is_trashed=1') }}" class="subnav__link ajax-link">Trash<span class="padding-left-sm sidenav__counter">{{ $posts_deleted_count }} <i class="sr-only">notifications</i></span></a></li>
          </ul>
        </nav>
      </div>
    </div> <!-- end of .subnav -->
  </div> <!-- end of .container -->
</div> <!-- end of .bg-contrast-lower -->
