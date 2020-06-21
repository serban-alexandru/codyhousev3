@extends('users::layouts.master')
@section('content')

@include('users::layouts.users-nav')

<!-- 👇 Full Screen Modal -->
<div class="modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal custom-modal-hide-body-scroll" id="modal-add-user">
  <div class="modal__content width-100% max-width-xs bg radius-md shadow-md flex flex-column" role="alertdialog" aria-labelledby="modal-add-user-title" aria-describedby="modal-description-4">
    <form action="{{ url('/admin/users/add') }}" id="modal-form-add-user" method="post">
      <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between flex-shrink-0">
        <h4 class="text-truncate" id="modal-add-user-title">Add User</h4>

        <button class="reset modal__close-btn modal__close-btn--inner js-modal__close js-tab-focus">
          <svg class="icon" viewBox="0 0 20 20">
            <title>Close modal window</title>
            <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
              <line x1="3" y1="3" x2="17" y2="17" />
              <line x1="17" y1="3" x2="3" y2="17" />
            </g>
          </svg>
        </button>
      </header>

      <div class="padding-y-sm padding-x-md flex-grow overflow-auto momentum-scrolling">
        <div>
          <label class="form-label margin-bottom-xxs" for="name">Name</label>
          <input class="form-control width-100%" type="text" name="name" id="name" required>
        </div>
        <div>
          <label class="form-label margin-bottom-xxs" for="email">Email</label>
          <input class="form-control width-100%" type="email" name="email" id="email" required>
        </div>
        <div>
          <label class="form-label margin-bottom-xxs" for="username">Username</label>
          <input class="form-control width-100%" type="text" name="username" id="username" required>
        </div>
        <div>
          <label class="form-label margin-bottom-xxs" for="password">Password</label>
          <input class="form-control width-100%" type="password" name="password" id="password" required>
        </div>
      </div>

      <footer class="padding-y-sm padding-x-md bg shadow-md flex-shrink-0">
        <div class="flex justify-end gap-xs">
          <button type="button" class="btn btn--subtle js-modal__close">Cancel</button>
          <button type="submit" class="btn btn--primary">Save</button>
        </div>
      </footer>
    </form>
  </div><!-- /.modal__content -->

</div><!-- /.modal -->
<!-- Full Screen Modal End -->

<section>
  <div class="container max-width-lg">
    <div class="grid gap-md@md">
      <aside class="sidebar sidebar--static@md col-3@md js-sidebar sidebar--right-on-mobile" data-static-class="sidebar--sticky-on-desktop z-index-1 bg-contrast-lowest" id="sidebar" aria-labelledby="sidebarTitle">
        <div class="sidebar__panel">
          <header class="sidebar__header z-index-2">
            <h1 class="text-md text-truncate" id="sidebarTitle">Sidebar title</h1>

            <button class="reset sidebar__close-btn js-sidebar__close-btn js-tab-focus">
              <svg class="icon" viewBox="0 0 16 16"><title>Close panel</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
            </button>
          </header>

          <div class="position-relative z-index-1">
            <!-- start sidebar content -->
            <aside class="bg" style="width: 241px; height: 80vh;">
              <nav class="sidenav js-sidenav">
                <div class="sidenav__label">Main</div>

                <ul class="sidenav__list site-table-filter">
                  <li class="sidenav__item sidenav__item--expanded">
                    <a href="{{ url('/admin/users') }}" class="sidenav__link" aria-current="page">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,7H2v7c0,0.6,0.4,1,1,1h10c0.6,0,1-0.4,1-1V7z"></path><rect y="1" width="16" height="4"></rect></g></svg>
                      <span class="sidenav__text">All Users</span>
                      <span class="sidenav__counter">{{ $allUsersCount }} <i class="sr-only">notifications</i></span>
                    </a>

                    <button class="reset sidenav__sublist-control js-sidenav__sublist-control js-tab-focus" aria-label="Toggle sub navigation">
                      <svg class="icon" viewBox="0 0 12 12"><polygon points="4 3 8 6 4 9 4 3"/></svg>
                    </button>

                    <ul class="sidenav__list">
                      <li class="sidenav__item">
                        <a href="{{ url('admin/users?status=suspended') }}" class="sidenav__link" @if(Request::get('status') === 'suspended') aria-current="page" @endif>
                          <span class="sidenav__text">Suspended</span>
                          <span class="sidenav__counter">{{ $suspendedUsersCount }} <i class="sr-only">notifications</i></span>
                        </a>
                      </li>
                      <li class="sidenav__item">
                        <a href="{{ url('admin/users?is_trashed=1') }}" class="sidenav__link">
                          <span class="sidenav__text">Trash</span>
                          <span class="sidenav__counter">{{ $trashedUsersCount }} <i class="sr-only">notifications</i></span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="sidenav__item">
                    <a href="{{ url('admin/users?role=editor') }}" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                      <span class="sidenav__text">Editors</span>

                      <span class="sidenav__counter">{{ $editorUsersCount }} <i class="sr-only">notifications</i></span>
                    </a>
                  </li>

                  <li class="sidenav__item">
                    <a href="{{ url('admin/users?role=subscriber') }}" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                      <span class="sidenav__text">Subcribers</span>

                      <span class="sidenav__counter">{{ $subscriberUsersCount }} <i class="sr-only">notifications</i></span>
                    </a>
                  </li>

                  <li class="sidenav__item">
                    <a href="{{ url('admin/users?role=admin') }}" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                      <span class="sidenav__text">Admin</span>

                      <span class="sidenav__counter">{{ $adminUsersCount }} <i class="sr-only">notifications</i></span>
                    </a>
                  </li>
                </ul>

                <div class="sidenav__divider" role="presentation"></div>

                <div class="sidenav__label">Other</div>

                <ul class="sidenav__list">
                  <li class="sidenav__item">
                    <a href="#0" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><circle cx="6" cy="8" r="2"></circle><path d="M10,2H6C2.7,2,0,4.7,0,8s2.7,6,6,6h4c3.3,0,6-2.7,6-6S13.3,2,10,2z M10,12H6c-2.2,0-4-1.8-4-4s1.8-4,4-4h4 c2.2,0,4,1.8,4,4S12.2,12,10,12z"></path></g></svg>
                      <span class="sidenav__text">Settings</span>
                    </a>
                  </li>

                  <li class="sidenav__item">
                    <a href="#0" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M12.25,8.231C11.163,9.323,9.659,10,8,10S4.837,9.323,3.75,8.231C1.5,9.646,0,12.145,0,15v1h16 v-1C16,12.145,14.5,9.646,12.25,8.231z"></path><circle cx="8" cy="4" r="4"></circle></g></svg>
                      <span class="sidenav__text">Account</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </aside>
            <!-- end sidebar content -->
          </div>
        </div>
      </aside>


      <template id="selected-id-template">
        <input type="hidden" name="selectedIDs[]" value="@{{value}}">
      </template><!-- /#selected-id-template -->

      <main class="position-relative padding-top-md z-index-1 col-12@md">
        <div id="site-table-with-pagination-container">
          @include('users::table')
        </div><!-- /#site-table-with-pagination-container -->
      </main>
    </div><!-- /.grid -->
  </div><!-- /.container -->
</section>

@endsection
