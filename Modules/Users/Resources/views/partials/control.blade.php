<div class="flex justify-between">
    <div class="margin-xs">
      <div class="inline-flex items-baseline">
        <h1 class="text-md color-contrast-high padding-y-xxxxs margin-x-xs" for="filterItems">Users:</h1>
          <div class="select inline-block js-select" data-trigger-class="reset text-sm color-contrast-high h1 inline-flex items-center cursor-pointer js-tab-focus">
            <select name="filterItems" id="filterItems">
              <optgroup data-type="status" label="Status">
                <option value="" data-count="{{ $users_active_count }}" selected>All Users</option>
                <option value="suspended" data-count="{{ $users_suspended_count }}" >Suspended</option>
                <option value="deleted" data-count="{{ $users_deleted_count }}" >Deleted</option>
              </optgroup>
              <!--<optgroup data-type="role" label="Role">
                <option value="admin" data-count="{{ $adminUsersCount }}">Admin</option>
                <option value="editor" data-count="{{ $editorUsersCount }}">Editor</option>
                <option value="registered" data-count="{{ $registeredUsersCount }}" >Registered</option>
              </optgroup>-->
            </select>
        <svg class="icon icon--xxxs margin-left-xxs" viewBox="0 0 8 8"><path d="M7.934,1.251A.5.5,0,0,0,7.5,1H.5a.5.5,0,0,0-.432.752l3.5,6a.5.5,0,0,0,.864,0l3.5-6A.5.5,0,0,0,7.934,1.251Z"/></svg>
      </div>
    </div>
</div>

<!-- Menu Bar -->
<div class="flex flex-wrap items-center justify-between"><div>

  <ul class="flex flex-wrap padding-right-xs">
    <li class="menu-bar__item js-menu-bar modal-trigger-add-user" aria-controls="modal-add-user" role="menuitem" data-href="{{ url('admin/users/add') }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>pencil</title><g fill="#000000"><path d="M18.85 4.39l-3.32-3.32a0.83 0.83 0 0 0-1.18 0l-11.62 11.62a0.84 0.84 0 0 0-0.2 0.33l-1.66 4.98a0.83 0.83 0 0 0 0.79 1.09 0.84 0.84 0 0 0 0.26-0.04l4.98-1.66a0.84 0.84 0 0 0 0.33-0.2l11.62-11.62a0.83 0.83 0 0 0 0-1.18z m-6.54 1.08l1.17-1.18 2.15 2.15-1.18 1.17z" fill="#000000"></path></g></svg>
      <span class="menu-bar__label">Add Users</span>
    </li>

    <li class="menu-bar__item" aria-controls="modal-search">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>search</title><g stroke-width="2" fill="#000000"><path fill="none" stroke="#000000" stroke-linecap="square" stroke-miterlimit="10" d="M1.66 18.26l3.32-3.32"></path><path fill="none" stroke="#000000" stroke-linecap="square" stroke-miterlimit="10" d="M11.62 1.66a6.64 6.64 0 1 1 0 13.28 6.64 6.64 0 1 1 0-13.28z"></path><path d="M14.94 8.3a3.32 3.32 0 0 0-3.32-3.32" fill="none" stroke="#000000" stroke-miterlimit="10"></path></g></svg>
      <span class="menu-bar__label">Search Users</span>
    </li>

    <li class="int-table-actions" data-table-controls="table-1">
      <ul class="menu-bar js-int-table-actions__no-items-selected js-menu-bar">
        <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
          <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
            <circle cx="8" cy="7.5" r="1.5" />
            <circle cx="1.5" cy="7.5" r="1.5" />
            <circle cx="14.5" cy="7.5" r="1.5" />
          </svg>
        </li>
      </ul>
      
      <ul class="menu-bar is-hidden js-int-table-actions__items-selected js-menu-bar">
        <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger" role="menuitem" aria-label="More options">
          <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
            <circle cx="8" cy="7.5" r="1.5" />
            <circle cx="1.5" cy="7.5" r="1.5" />
            <circle cx="14.5" cy="7.5" r="1.5" />
          </svg>
        </li>

        <li class="menu-bar__item" role="menuitem" data-control-form="#form-bulk-delete">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>bin</title><g fill="#000000"><path d="M2.49 6.64v10.79a2.49 2.49 0 0 0 2.49 2.49h9.96a2.49 2.49 0 0 0 2.49-2.49v-10.79z m4.98 9.13h-1.66v-5.81h1.66z m3.32 0h-1.66v-5.81h1.66z m3.32 0h-1.66v-5.81h1.66z" fill="#000000"></path><path d="M19.09 3.32h-4.98v-2.49a0.83 0.83 0 0 0-0.83-0.83h-6.64a0.83 0.83 0 0 0-0.83 0.83v2.49h-4.98a0.83 0.83 0 0 0 0 1.66h18.26a0.83 0.83 0 0 0 0-1.66z m-11.62-1.66h4.98v1.66h-4.98z"></path></g></svg>
          <span class="menu-bar__label">Delete</span>
          <span class="counter counter--critical counter--docked"><span class="table-total-selected">0</span><i class="sr-only">Delete</i></span>
        </li>

        <li class="menu-bar__item" role="menuitem" data-control-form="#form-bulk-suspend">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>a-remove</title><g stroke-width="2" fill="#000000"><path d="M11.88 13.13h-3.76a6.25 6.25 0 0 0-6.25 6.24h11.25" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></path><path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M10 0.63a4.38 4.38 0 1 0 0 8.74 4.38 4.38 0 1 0 0-8.75z"></path><path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M14.38 15.63h4.99"></path></g></svg>
          <span class="counter counter--critical counter--docked"><span class="table-total-selected">0</span><!-- /.table-total-selected --> <i
                  class="sr-only">Suspend</i></span>
          <span class="menu-bar__label">Suspend</span>
        </li>
      </ul>

</div>
</div><!-- /.flex flex-wrap gap-sm items-center justify-between -->
</div>