
<div class="bg radius-md padding-md shadow-sm">
    <div class="margin-bottom-xl">
      <div class="flex flex-wrap gap-sm items-center justify-between">
        <div>
          <div class="flex flex-wrap gap-xs">

            <li class="menu-bar__item" aria-controls="modal-add-article">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>ic_add_48px</title><rect data-element="frame" x="2.3999999999999986" y="2.3999999999999986" width="43.2" height="43.2" rx="22" ry="22" stroke="none" fill="#f9f9f9"></rect>
                    <g transform="translate(12 12) scale(0.5)" fill="#00a8db">
                        <path d="M38 26H26v12h-4V26H10v-4h12V10h4v12h12v4z"></path>
                    </g>
                </svg>
                <span class="menu-bar__label">Add Article</span>
              </li>
  
              <li class="menu-bar__item" aria-controls="modal-search">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>ic_search_48px</title><rect data-element="frame" x="2.3999999999999986" y="2.3999999999999986" width="43.2" height="43.2" rx="22" ry="22" stroke="none" fill="#f9f9f9"></rect>
                    <g transform="translate(12 12) scale(0.5)" fill="#666666">
                        <path d="M31 28h-1.59l-.55-.55C30.82 25.18 32 22.23 32 19c0-7.18-5.82-13-13-13S6 11.82 6 19s5.82 13 13 13c3.23 0 6.18-1.18 8.45-3.13l.55.55V31l10 9.98L40.98 38 31 28zm-12 0c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9z"></path>
                    </g>
                </svg>
              </svg>
                <span class="menu-bar__label">Search Articles</span>
              </li>

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
            
            <div class="int-table-actions" data-table-controls="table-1">
                <menu class="menu-bar js-int-table-actions__no-items-selected js-menu-bar">
                  <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
                    <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                      <circle cx="8" cy="7.5" r="1.5" />
                      <circle cx="1.5" cy="7.5" r="1.5" />
                      <circle cx="14.5" cy="7.5" r="1.5" /></svg>
                  </li>
                  <li class="menu-bar__item " role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>ic_refresh_48px</title><rect data-element="frame" x="2.3999999999999986" y="2.3999999999999986" width="43.2" height="43.2" rx="22" ry="22" stroke="none" fill="#f9f9f9"></rect>
                        <g transform="translate(12 12) scale(0.5)" fill="#666666">
                            <path d="M35.3 12.7C32.41 9.8 28.42 8 24 8 15.16 8 8.02 15.16 8.02 24S15.16 40 24 40c7.45 0 13.69-5.1 15.46-12H35.3c-1.65 4.66-6.07 8-11.3 8-6.63 0-12-5.37-12-12s5.37-12 12-12c3.31 0 6.28 1.38 8.45 3.55L26 22h14V8l-4.7 4.7z"></path>
                        </g>
                    </svg>
                    <span class="menu-bar__label">Refresh</span>
                  </li>
                </menu>
                <menu class="menu-bar is-hidden js-int-table-actions__items-selected js-menu-bar">
                  <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
                    <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                      <circle cx="8" cy="7.5" r="1.5" />
                      <circle cx="1.5" cy="7.5" r="1.5" />
                      <circle cx="14.5" cy="7.5" r="1.5" /></svg>
                  </li>
                  <li class="menu-bar__item " role="menuitem">
                    <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                      <g>
                        <path d="M2,6v8c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V6H2z"></path>
                        <path d="M12,3V1c0-0.6-0.4-1-1-1H5C4.4,0,4,0.4,4,1v2H0v2h16V3H12z M10,3H6V2h4V3z"></path>
                      </g>
                    </svg>
                    <span class="menu-bar__label">Delete</span>
                    <span class="counter counter--critical counter--docked">1 <i class="sr-only">Notifications</i></span>
                  </li>
                </menu>
              </div>
          </div>
        </div>
          
          <li class="menu-bar__item hide@md no-js:is-hidden" aria-controls="sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>preferences</title><g fill="#828282"><path fill="#828282" d="M23,3H11v2h12c0.552,0,1-0.448,1-1S23.552,3,23,3z"></path> <path fill="#828282" d="M1,5h2v2c0,0.552,0.448,1,1,1h4c0.552,0,1-0.448,1-1V1c0-0.552-0.448-1-1-1H4C3.448,0,3,0.448,3,1v2H1 C0.448,3,0,3.448,0,4S0.448,5,1,5z"></path> <path d="M23,11h-2v2h2c0.552,0,1-0.448,1-1S23.552,11,23,11z"></path> <path d="M1,13h12v2c0,0.552,0.448,1,1,1h4c0.552,0,1-0.448,1-1V9c0-0.552-0.448-1-1-1h-4 c-0.552,0-1,0.448-1,1v2H1c-0.552,0-1,0.448-1,1S0.448,13,1,13z"></path> <path fill="#828282" d="M23,19H11v2h12c0.552,0,1-0.448,1-1S23.552,19,23,19z"></path> <path fill="#828282" d="M8,16H4c-0.552,0-1,0.448-1,1v2H1c-0.552,0-1,0.448-1,1s0.448,1,1,1h2v2c0,0.552,0.448,1,1,1h4 c0.552,0,1-0.448,1-1v-6C9,16.448,8.552,16,8,16z"></path></g></svg>
            <span class="menu-bar__label">Sidebar</span>
            </g>
            </svg>
        </li>
  
      </div>
    </div>
  
    