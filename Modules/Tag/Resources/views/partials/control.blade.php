<div class="flex justify-between controlbar--sticky">
    <div class="margin-xs">
      <div class="inline-flex items-baseline">
        <h1 class="text-md color-contrast-high padding-y-xxxxs margin-x-xs" for="filterItems">Tags:</h1>
          <div class="select inline-block js-select" data-trigger-class="reset text-sm color-contrast-high h1 inline-flex items-center cursor-pointer js-tab-focus">
            <select name="filterItems" id="filterItems">
              <optgroup label="Tag Status">
                <option value="published" data-count="{{ $published_tags_count }}" selected>All Tags</option>
                <option value="draft" data-count="{{ $draft_tags_count }}">Draft</option>
                <option value="suspended" data-count="{{ $suspended_tags_count }}">Suspended</option>
                <option value="trashed" data-count="{{ $trash_tags_count }}">Deleted</option>
              </optgroup>
            </select>
        <svg class="icon icon--xxxs margin-left-xxs" viewBox="0 0 8 8"><path d="M7.934,1.251A.5.5,0,0,0,7.5,1H.5a.5.5,0,0,0-.432.752l3.5,6a.5.5,0,0,0,.864,0l3.5-6A.5.5,0,0,0,7.934,1.251Z"/></svg>
      </div>
    </div>
</div>
  
<!-- Menu Bar -->
<div class="flex flex-wrap items-center justify-between"><div>
  <ul class="flex flex-wrap padding-right-xs">

    <li class="menu-bar__item js-menu-bar" aria-controls="modal-add-tag">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>pencil</title><g fill="#000000"><path d="M18.85 4.39l-3.32-3.32a0.83 0.83 0 0 0-1.18 0l-11.62 11.62a0.84 0.84 0 0 0-0.2 0.33l-1.66 4.98a0.83 0.83 0 0 0 0.79 1.09 0.84 0.84 0 0 0 0.26-0.04l4.98-1.66a0.84 0.84 0 0 0 0.33-0.2l11.62-11.62a0.83 0.83 0 0 0 0-1.18z m-6.54 1.08l1.17-1.18 2.15 2.15-1.18 1.17z" fill="#000000"></path></g></svg>
          <span class="menu-bar__label">Add Tag</span>
    </li>

    <li class="menu-bar__item js-menu-bar" aria-controls="modal-add-tag-category">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>save-for-later</title><g fill="#000000"><path d="M16.38 8.4a4.61 4.61 0 0 1-4.44-5.88h-9.84a1.26 1.26 0 0 0-1.26 1.26v14.28a1.26 1.26 0 0 0 1.26 1.26h14.28a1.26 1.26 0 0 0 1.26-1.26v-9.84a4.61 4.61 0 0 1-1.26 0.18z m0.42 9.66a0.42 0.42 0 0 1-0.42 0.42h-14.28a0.42 0.42 0 0 1-0.42-0.42v-2.52a0.42 0.42 0 0 1 0.42-0.42h14.28a0.42 0.42 0 0 1 0.42 0.42z" fill="#000000"></path><path d="M16.38 0a3.78 3.78 0 1 0 3.78 3.78 3.78 3.78 0 0 0-3.78-3.78z m1.68 4.2h-1.26v1.26a0.42 0.42 0 0 1-0.84 0v-1.26h-1.26a0.42 0.42 0 0 1 0-0.84h1.26v-1.26a0.42 0.42 0 0 1 0.84 0v1.26h1.26a0.42 0.42 0 0 1 0 0.84z" fill="#000000"></path></g></svg>
          <span class="menu-bar__label">Add Tag Category</span>
    </li>

    <li class="menu-bar__item" aria-controls="modal-search">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>search</title><g stroke-width="2" fill="#000000"><path fill="none" stroke="#000000" stroke-linecap="square" stroke-miterlimit="10" d="M1.66 18.26l3.32-3.32"></path><path fill="none" stroke="#000000" stroke-linecap="square" stroke-miterlimit="10" d="M11.62 1.66a6.64 6.64 0 1 1 0 13.28 6.64 6.64 0 1 1 0-13.28z"></path><path d="M14.94 8.3a3.32 3.32 0 0 0-3.32-3.32" fill="none" stroke="#000000" stroke-miterlimit="10"></path></g></svg>
        <span class="menu-bar__label">Search Tags</span>
    </li>

<div class="int-table-actions" data-table-controls="table-1">
  <menu class="menu-bar js-int-table-actions__no-items-selected js-menu-bar">

     <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
      <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
        <circle cx="8" cy="7.5" r="1.5" />
        <circle cx="1.5" cy="7.5" r="1.5" />
        <circle cx="14.5" cy="7.5" r="1.5" /></svg>
    </li>

    <li class="menu-bar__item " role="menuitem" onclick="location.reload();">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><title>reload</title><g fill="#000000"><path d="M17.78 0.05a0.38 0.38 0 0 0-0.41 0.08l-2.28 2.26a8.91 8.91 0 0 0-6.09-2.39 9 9 0 0 0-8.25 5.4 1.5 1.5 0 0 0 0.77 1.97 1.47 1.47 0 0 0 0.6 0.13 1.5 1.5 0 0 0 1.38-0.9 6 6 0 0 1 5.5-3.6 5.93 5.93 0 0 1 3.95 1.5l-2.54 2.52a0.38 0.38 0 0 0-0.09 0.39 0.37 0.37 0 0 0 0.31 0.25l6.96 0.77h0.05a0.37 0.37 0 0 0 0.37-0.38v-7.65a0.38 0.38 0 0 0-0.23-0.35z" fill="#000000"></path><path d="M0.22 17.95a0.34 0.34 0 0 0 0.15 0.02 0.38 0.38 0 0 0 0.26-0.1l2.28-2.25a8.91 8.91 0 0 0 6.09 2.38 9 9 0 0 0 8.25-5.4 1.5 1.5 0 0 0-2.75-1.2 6 6 0 0 1-5.5 3.6 5.93 5.93 0 0 1-3.95-1.5l2.55-2.52a0.38 0.38 0 0 0 0.09-0.38 0.37 0.37 0 0 0-0.32-0.25l-6.96-0.78a0.41 0.41 0 0 0-0.3 0.09 0.38 0.38 0 0 0-0.12 0.28v7.66a0.38 0.38 0 0 0 0.23 0.35z"></path></g></svg>
        <span class="menu-bar__label">Refresh</span>
    </li>
      <li class="menu-bar__item hide@md no-js:is-hidden margin-left-xs" role="menuitem" aria-controls="sidebar">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>preferences</title><rect data-element="frame" x="2.3999999999999986" y="2.3999999999999986" width="43.2" height="43.2" rx="22" ry="22" stroke="none" fill="#f9f9f9"></rect><g transform="translate(12 12) scale(0.5)" fill="#666666"><path fill="#666666" d="M46,7H21c-0.552,0-1,0.448-1,1s0.448,1,1,1h25c0.552,0,1-0.448,1-1S46.552,7,46,7z"></path> <path fill="#666666" d="M16,1H8C7.448,1,7,1.448,7,2v5H2C1.448,7,1,7.448,1,8s0.448,1,1,1h5v5c0,0.552,0.448,1,1,1h8 c0.552,0,1-0.448,1-1V2C17,1.448,16.552,1,16,1z"></path> <path d="M2,23h25c0.552,0,1,0.448,1,1s-0.448,1-1,1H2c-0.552,0-1-0.448-1-1S1.448,23,2,23z"></path> <path d="M32,17h8c0.552,0,1,0.448,1,1v5h5c0.552,0,1,0.448,1,1s-0.448,1-1,1h-5v5 c0,0.552-0.448,1-1,1h-8c-0.552,0-1-0.448-1-1V18C31,17.448,31.448,17,32,17z"></path> <path fill="#666666" d="M46,39H21c-0.552,0-1,0.448-1,1s0.448,1,1,1h25c0.552,0,1-0.448,1-1S46.552,39,46,39z"></path> <path fill="#666666" d="M16,33H8c-0.552,0-1,0.448-1,1v5H2c-0.552,0-1,0.448-1,1s0.448,1,1,1h5v5c0,0.552,0.448,1,1,1h8 c0.552,0,1-0.448,1-1V34C17,33.448,16.552,33,16,33z"></path></g></svg>
        <span class="menu-bar__label">Sidebar</span>
    </li>

  </menu>
  <menu class="menu-bar is-hidden js-int-table-actions__items-selected js-menu-bar">

    <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
      <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
        <circle cx="8" cy="7.5" r="1.5" />
        <circle cx="1.5" cy="7.5" r="1.5" />
        <circle cx="14.5" cy="7.5" r="1.5" /></svg>
    </li>

    <li class="menu-bar__item" role="menuitem" data-control-form="#form-bulk-delete">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>bin</title><g fill="#000000"><path d="M2.49 6.64v10.79a2.49 2.49 0 0 0 2.49 2.49h9.96a2.49 2.49 0 0 0 2.49-2.49v-10.79z m4.98 9.13h-1.66v-5.81h1.66z m3.32 0h-1.66v-5.81h1.66z m3.32 0h-1.66v-5.81h1.66z" fill="#000000"></path><path d="M19.09 3.32h-4.98v-2.49a0.83 0.83 0 0 0-0.83-0.83h-6.64a0.83 0.83 0 0 0-0.83 0.83v2.49h-4.98a0.83 0.83 0 0 0 0 1.66h18.26a0.83 0.83 0 0 0 0-1.66z m-11.62-1.66h4.98v1.66h-4.98z"></path></g></svg>
      <span class="menu-bar__label">Delete</span>
      <span class="counter counter--critical counter--docked"><span class="table-total-selected">0</span><i class="sr-only">Delete</i></span>
    </li>

  </menu>
</ul>

</div>
</div><!-- /.flex flex-wrap gap-sm items-center justify-between -->
</div>