<div class="flex justify-between controlbar--sticky">
  <div class="margin-xs">
    <div class="inline-flex items-baseline">
      <h1 class="text-md color-contrast-high padding-y-xxxxs margin-x-xs" for="filterItems">Scrapers</h1>
      <div class="select inline-block js-select" data-trigger-class="reset text-sm color-contrast-high h1 inline-flex items-center cursor-pointer js-tab-focus">
        <select name="filterItems" id="filterItems">
          <optgroup label="Post Status">
            <option value=""selected>Currantly Running</option>
            <option value="draft">Scraper 1</option>
            <option value="pending">Scraper 2</option>
            <option value="deleted">Scraper 3</option>
          </optgroup>
        </select>
        <svg class="icon icon--xxxs margin-left-xxs" viewBox="0 0 8 8"><path d="M7.934,1.251A.5.5,0,0,0,7.5,1H.5a.5.5,0,0,0-.432.752l3.5,6a.5.5,0,0,0,.864,0l3.5-6A.5.5,0,0,0,7.934,1.251Z"/></svg>
      </div>
    </div>
  </div>

  <!-- Menu Bar -->
  <div class="flex flex-wrap items-center justify-between margin-right-xxs">
    <div class="flex flex-wrap">


      <li class="menu-bar__item padding-top-xxxs">
        <a href="{{ url('/admin/scraper/settings') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>cogwheel</title><g fill="#000000"><path d="M19.3 8.35l-2.48-0.28a7.05 7.05 0 0 0-0.62-1.49l1.56-1.95a0.83 0.83 0 0 0-0.06-1.11l-1.19-1.18a0.83 0.83 0 0 0-1.11-0.06l-1.95 1.56a7.05 7.05 0 0 0-1.49-0.62l-0.27-2.48a0.83 0.83 0 0 0-0.83-0.74h-1.67a0.83 0.83 0 0 0-0.84 0.74l-0.27 2.48a7.05 7.05 0 0 0-1.49 0.62l-1.95-1.56a0.83 0.83 0 0 0-1.11 0.06l-1.19 1.19a0.83 0.83 0 0 0-0.06 1.11l1.56 1.95a7.05 7.05 0 0 0-0.62 1.49l-2.48 0.27a0.83 0.83 0 0 0-0.74 0.83v1.67a0.83 0.83 0 0 0 0.74 0.84l2.48 0.28a7.05 7.05 0 0 0 0.62 1.49l-1.56 1.94a0.83 0.83 0 0 0 0.06 1.11l1.19 1.19a0.83 0.83 0 0 0 1.11 0.06l1.95-1.56a7.05 7.05 0 0 0 1.49 0.62l0.27 2.48a0.83 0.83 0 0 0 0.84 0.74h1.67a0.83 0.83 0 0 0 0.83-0.74l0.28-2.48a7.05 7.05 0 0 0 1.49-0.62l1.95 1.56a0.83 0.83 0 0 0 1.11-0.06l1.18-1.19a0.83 0.83 0 0 0 0.06-1.11l-1.56-1.95a7.05 7.05 0 0 0 0.62-1.49l2.48-0.27a0.83 0.83 0 0 0 0.74-0.83v-1.67a0.83 0.83 0 0 0-0.74-0.84z m-9.28 5.01a3.34 3.34 0 1 1 3.34-3.34 3.34 3.34 0 0 1-3.34 3.34z" fill="#000000"></path></g></svg>
        </a>
        <span class="menu-bar__label">Settings</span>
      </li>


    </div>
  </div> <!-- end of <div class="flex flex-wrap items-center justify-between margin-right-xxs"> -->
</div>
