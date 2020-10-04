<aside class="sidebar sidebar--static@md col-3@md js-sidebar sidebar--right-on-mobile" data-static-class="sidebar--sticky-on-desktop z-index-1 bg-contrast-lowest" id="sidebar" aria-labelledby="sidebarTitle">
  <div class="sidebar__panel">
  <nav class="sidenav padding-y-sm text-sm@md js-sidenav">
    <div class="sidenav__label margin-bottom-xxxs">
      <span class="text-sm color-contrast-medium">Posts</span>
    </div>

    <ul class="sidenav__list">

      <li class="sidenav__item sidenav__item--expanded">
        <a href="#0" class="sidenav__link" aria-current="page">
          <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,7H2v7c0,0.6,0.4,1,1,1h10c0.6,0,1-0.4,1-1V7z"></path><rect y="1" width="16" height="4"></rect></g></svg>
          <span class="sidenav__text">All Posts</span>
          <span class="sidenav__counter">{{ $posts_count }} <i class="sr-only">notifications</i></span>
        </a>

        <button class="reset sidenav__sublist-control js-sidenav__sublist-control js-tab-focus" aria-label="Toggle sub navigation">
          <svg class="icon" viewBox="0 0 12 12"><polygon points="4 3 8 6 4 9 4 3"/></svg>
        </button>

        <ul class="sidenav__list">
          <li class="sidenav__item">
            <a href="#0" class="sidenav__link">
              <span class="sidenav__text">Draft</span>
              <span class="sidenav__counter">18 <i class="sr-only">notifications</i></span>
            </a>
          </li>

          <li class="sidenav__item">
            <span class="sidenav__link">
              <span class="sidenav__text">Trash</span>
              <form action="{{ route('posts.trash.empty') }}" method="post"  id="formCleanTrash">
                @csrf
                <small class="color-accent cursor-pointer" id="cleanTrash" title="Clean Trash">
                  <svg class="width-75%" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <title>Clean Trash</title>
                                    <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="1" transform="translate(0.5 0.5)" fill="#828282" stroke="#828282"><polyline fill="none" stroke="#828282" stroke-miterlimit="10" points="20,9 20,23 4,23 4,9 "></polyline> <line fill="none" stroke="#828282" stroke-miterlimit="10" x1="1" y1="5" x2="23" y2="5"></line> <line fill="none" stroke-miterlimit="10" x1="12" y1="12" x2="12" y2="18"></line> <line fill="none" stroke-miterlimit="10" x1="8" y1="12" x2="8" y2="18"></line> <line fill="none" stroke-miterlimit="10" x1="16" y1="12" x2="16" y2="18"></line> <polyline fill="none" stroke="#828282" stroke-miterlimit="10" points="8,5 8,1 16,1 16,5 "></polyline></g></svg>
                </small>
              </form>
              <span class="sidenav__counter">{{ $posts_count_deleted }} <i class="sr-only">notifications</i></span>
            </span>
          </li>
        </ul>
      </li>

    </ul>

    <div class="sidenav__divider margin-y-xs" role="presentation"></div>

    <ul class="sidenav__list">
      <li class="sidenav__item">
        <a href="{{ url('admin/posts/settings/') }}" class="sidenav__link">
          <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><circle cx="6" cy="8" r="2"></circle><path d="M10,2H6C2.7,2,0,4.7,0,8s2.7,6,6,6h4c3.3,0,6-2.7,6-6S13.3,2,10,2z M10,12H6c-2.2,0-4-1.8-4-4s1.8-4,4-4h4 c2.2,0,4,1.8,4,4S12.2,12,10,12z"></path></g></svg>
          <span class="sidenav__text">Settings</span>
        </a>
      </li>

    </ul>
  </nav>
</div>
</aside>
