@extends('layouts.app')
@section('content')

<div class="bg-contrast-lower js-hide-nav js-hide-nav--sub hide-nav z-index-2">
    <div class="container max-width-lg">
      <div class="subnav  js-subnav">
        <button class="reset btn btn--subtle margin-y-sm subnav__control js-subnav__control">
          <span>Show Categories</span>
          <svg class="icon icon--xxs margin-left-xxs" aria-hidden="true" viewBox="0 0 12 12">
            <polyline points="0.5 3.5 6 9.5 11.5 3.5" fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></polyline>
          </svg>
        </button>

        <div class="subnav__wrapper js-subnav__wrapper">
          <nav class="subnav__nav justify-left">
            <button class="reset subnav__close-btn js-subnav__close-btn js-tab-focus" aria-label="Close navigation">
              <svg class="icon" viewBox="0 0 16 16">
                <g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                  <line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line>
                  <line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line>
                </g>
              </svg>
            </button>

            <menu class="menu-bar menu-bar--expanded@md js-menu-bar">

                <li class="menu-bar__item" aria-controls="modal-full-width" role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>pencil</title><rect data-element="frame" x="9.600000000000001" y="9.600000000000001" width="28.799999999999997" height="28.799999999999997" rx="6" ry="6" stroke="none" fill="#0d9eec"></rect><g transform="translate(14.399999999999999 14.399999999999999) scale(0.4)" fill="#ffffff"><path fill="#ffffff" d="M43.7,8.6l-4.3-4.3c-0.9-0.9-2.2-1.5-3.5-1.5c-1.3,0-2.6,0.5-3.5,1.5L5.1,31.5C5,31.6,5,31.7,4.9,31.8 c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1l-2,12c-0.1,0.3,0.1,0.6,0.3,0.9c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.1,0,0.2,0l12-2c0,0,0.1,0,0.1,0 c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.2l27.2-27.2C45.7,13.8,45.7,10.6,43.7,8.6z M9.3,42.2l-3.6-3.6l0.7-4.4l7.3,7.3L9.3,42.2z M30.7,18.7L14.4,35c-0.2,0.2-0.5,0.3-0.7,0.3c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l16.3-16.3c0.4-0.4,1-0.4,1.4,0 S31.1,18.3,30.7,18.7z M37.8,18.8l-8.6-8.6l2.6-2.6l8.6,8.6L37.8,18.8z"></path></g></svg>
                    <span class="menu-bar__label">Add</span>
                  </li>
              
                <li class="menu-bar__item" role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>single-folded-content</title><g fill="#bfbfbf"><path fill="#bfbfbf" d="M15,0H2C1.448,0,1,0.448,1,1v22c0,0.552,0.448,1,1,1h20c0.552,0,1-0.448,1-1V8h-7c-0.552,0-1-0.448-1-1V0z M5,17h14v2H5V17z M5,12h14v2H5V12z M11,9H5V7h6V9z"></path> <polygon points="22.414,6 17,6 17,0.586 "></polygon></g></svg>
                  <span class="counter counter--critical counter--docked">4 <i class="sr-only">Notifications</i></span>
                  <span class="menu-bar__label">Draft</span>
                </li>
              
                <li class="menu-bar__item" role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>trash-simple</title><g fill="#bfbfbf"><path fill="#bfbfbf" d="M3,8v15c0,0.552,0.448,1,1,1h16c0.552,0,1-0.448,1-1V8H3z M9,19H7v-6h2V19z M13,19h-2v-6h2V19z M17,19h-2v-6 h2V19z"></path> <path d="M23,4h-6V1c0-0.552-0.447-1-1-1H8C7.447,0,7,0.448,7,1v3H1C0.447,4,0,4.448,0,5s0.447,1,1,1 h22c0.553,0,1-0.448,1-1S23.553,4,23,4z M9,2h6v2H9V2z"></path></g></svg>
                  <span class="counter counter--critical counter--docked">4 <i class="sr-only">Notifications</i></span>
                  <span class="menu-bar__label">Delete</span>
                </li>

                <li class="menu-bar__item" aria-controls="modal-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>zoom-2</title><g fill="#bfbfbf"><path fill="#bfbfbf" d="M1.29 19.88l4.37-4.37a9.93 9.93 0 0 1-1.66-5.51c0-5.51 4.49-10 10-10s10 4.49 10 10-4.49 10-10 10a9.93 9.93 0 0 1-5.51-1.66l-4.37 4.37a1 1 0 0 1-1.41 0l-1.42-1.42a1 1 0 0 1 0-1.41z m20.71-9.88c0-4.41-3.59-8-8-8s-8 3.59-8 8 3.59 8 8 8 8-3.59 8-8z"></path></g></svg>
                        <span class="menu-bar__label">Search</span>
                      </g>
                    </svg>
                </li>

                <li class="menu-bar__item hide@md no-js:is-hidden" aria-controls="sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>ic_menu_24px</title>
                        <g fill="#bfbfbf">
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                        </g>
                    </svg>
                        <span class="menu-bar__label">Sidebar</span>
                      </g>
                    </svg>
                </li>

              </menu>
    
                  <div class="modal modal--search modal--animate-fade flex flex-center padding-md js-modal" id="modal-search">
                    <div class="modal__content width-100% max-width-sm" role="alertdialog" aria-labelledby="modal-search-title" aria-describedby="">
                      <form class="full-screen-search">
                        <label for="search-input-x" id="modal-search-title" class="sr-only">Search</label>
                        <input class="reset full-screen-search__input" type="search" name="search-input-x" id="search-input-x" placeholder="Search...">
                        <button class="reset full-screen-search__btn">
                          <svg class="icon" viewBox="0 0 24 24">
                            <title>Search</title>
                            <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10">
                              <line x1="22" y1="22" x2="15.656" y2="15.656"></line>
                              <circle cx="10" cy="10" r="8"></circle>
                            </g>
                          </svg>
                        </button>
                      </form>
                    </div>
                  
                    <button class="reset modal__close-btn modal__close-btn--outer  js-modal__close js-tab-focus">
                      <svg class="icon icon--sm" viewBox="0 0 24 24">
                        <title>Close modal window</title>
                        <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
                          <line x1="3" y1="3" x2="21" y2="21" />
                          <line x1="21" y1="3" x2="3" y2="21" />
                        </g>
                      </svg>
                    </button>
                  </div>

          </nav>
        </div>
      </div>
    </div>
  </div>

  <section class="padding-y">
    <div class="container max-width-lg">
      <div class="text-component text-center margin-bottom-lg">
      </div>
  
      <div class="grid gap-lg@lg">
        <aside class="sidebar sidebar--static@md col-3@md js-sidebar" data-static-class="sidebar--sticky-on-desktop z-index-1" id="sidebar" aria-labelledby="sidebarTitle">
          <div class="sidebar__panel">
            <header class="sidebar__header z-index-2">
              <h1 class="text-md text-truncate" id="sidebarTitle">Sidebar title</h1>
        
              <button class="reset sidebar__close-btn js-sidebar__close-btn js-tab-focus">
                <svg class="icon" viewBox="0 0 16 16"><title>Close panel</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
              </button>
            </header>
        
            <div class="position-relative z-index-1">
              <!-- start sidebar content -->
              <aside class="bg border-right-sidebar padding-right-sm">
                <nav class="sidenav js-sidenav">
                  <div class="sidenav__label">Post Management</div>
                  
                  <ul class="sidenav__list">
                    <li class="sidenav__item">
                      <a href="#0" class="sidenav__link">
                        <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M6,0H1C0.4,0,0,0.4,0,1v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V1C7,0.4,6.6,0,6,0z M5,5H2V2h3V5z"></path><path d="M15,0h-5C9.4,0,9,0.4,9,1v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V1C16,0.4,15.6,0,15,0z M14,5h-3V2h3V5z"></path><path d="M6,9H1c-0.6,0-1,0.4-1,1v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1v-5C7,9.4,6.6,9,6,9z M5,14H2v-3h3V14z"></path><path d="M15,9h-5c-0.6,0-1,0.4-1,1v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1v-5C16,9.4,15.6,9,15,9z M14,14h-3v-3h3V14z"></path></g></svg>
                        <span class="sidenav__text">Published</span>
              
                        <span class="sidenav__counter">12 <i class="sr-only">notifications</i></span>
                      </a>
              
                      <button class="reset sidenav__sublist-control js-sidenav__sublist-control js-tab-focus" aria-label="Toggle sub navigation">
                        <svg class="icon" viewBox="0 0 12 12"><polygon points="4 3 8 6 4 9 4 3"/></svg>
                      </button>
              
                      <ul class="sidenav__list">
                        <li class="sidenav__item">
                          <a href="#0" class="sidenav__link">
                            <span class="sidenav__text">New widget</span>
                          </a>
                        </li>
              
                        <li class="sidenav__item">
                          <a href="#0" class="sidenav__link">
                            <span class="sidenav__text">Analytics</span>
                          </a>
                        </li>
                      </ul>
              
                    </li>
              
                    <li class="sidenav__item">
                        <a href="#0" class="sidenav__link">
                          <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                          <span class="sidenav__text">Submitted</span>
                
                          <span class="sidenav__counter">2 <i class="sr-only">notifications</i></span>
                        </a>
                      </li>
              
                    <li class="sidenav__item">
                      <a href="#0" class="sidenav__link">
                        <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                        <span class="sidenav__text">Draft</span>
              
                        <span class="sidenav__counter">18 <i class="sr-only">notifications</i></span>
                      </a>
                    </li>

                    <li class="sidenav__item">
                        <a href="#0" class="sidenav__link">
                          <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                          <span class="sidenav__text">Trash</span>
                
                          <span class="sidenav__counter">122 <i class="sr-only">notifications</i></span>
                        </a>
                      </li>

                  </ul>
              
                  <div class="sidenav__divider" role="presentation"></div>
              
                  <div class="sidenav__label">Account Setting</div>
              
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
        
        <main class="position-relative z-index-1 col-12@md">
          <!-- start main content -->

          <section class="thank-you padding-y-xxl">
            <div class="container max-width-adaptive-sm text-left">
          
              <div class="text-component">
                <h1 class="text-xxxl">No Published Content Yet :( </h1>
                  <p class="color-contrast-medium">You haven't add any content yet. Add a post by clicking below</p>
          
                  <p class="flex flex-wrap flex-column flex-row@xs gap-xxs justify-left">
                    <a class="btn btn--primary" href="#0">Create</a>
                    <a class="btn btn--primary" href="#0">Edit Draft</a>
                  </p>
              </div>
            </div>
          </section>
          <!-- end main content -->
        </main>
      </div>
    </div>
  </section>
@endsection