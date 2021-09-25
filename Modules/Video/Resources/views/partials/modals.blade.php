<!-- 👇 Full Screen Modal -->
<div class="custom-modal modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal custom-modal-hide-body-scroll" id="modal-add-article">
  <div class="modal__content height-100% tabs js-tabs width-100% max-width-sm bg radius-md shadow-md flex flex-column">
      <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
        <!-- 👇 Tabs -->
        <nav class="tabs">
          <ul class="flex flex-wrap gap-xl js-tabs__controls" aria-label="Tabs Interface">
            <li><a href="#tab1Panel1" class="tabs__control" aria-selected="true">Add</a></li>
            <li><a href="#tab1Panel2" class="tabs__control">Video</a></li>
            <li><a href="#tab1Panel3" class="tabs__control">Settings</a></li>
          </ul>
        </nav>
        <!-- End Tabs -->

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

      <!--Tab1 Content-->
      <div class="padding-y-sm padding-x-md flex-grow overflow-auto">
        <div class="js-tabs__panels">
          <section id="tab1Panel1" class="padding-top-md js-tabs__panel">
            <div>

              <div class="grid gap-sm">
                <label class="form-label margin-bottom-xxs" for="input-name">Enter Your Video Title</label>
                <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>
              <div>
                <label class="form-label margin-bottom-xxs" for="input-name">Enter Your Video Discription</label>
              <div id="editorjs" class="form-control"></div><!-- /#ajax-add-blog-form -->
            </div>
          </section>

        <!--Tab2 Content-->
          <section id="tab1Panel2" class="padding-top-md js-tabs__panel">
            <div class="file-upload inline-block">
              <label for="upload2" class="file-upload__label btn btn--primary">
                <span class="flex items-center">
                  <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="2"><path  stroke-linecap="square" stroke-linejoin="miter" d="M2 16v6h20v-6"></path><path stroke-linejoin="miter" stroke-linecap="butt" d="M12 17V2"></path><path stroke-linecap="square" stroke-linejoin="miter" d="M18 8l-6-6-6 6"></path></g></svg>
                  
                  <span class="margin-left-xxs file-upload__text file-upload__text--has-max-width">Upload Video Image</span>
                </span>
              </label> 
            
              <input type="file" class="file-upload__input" name="upload2" id="upload2" multiple>
            </div>
            
            <div class="file-upload inline-block">
              <label for="upload2" class="file-upload__label btn btn--primary">
                <span class="flex items-center">
                  <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="2"><path  stroke-linecap="square" stroke-linejoin="miter" d="M2 16v6h20v-6"></path><path stroke-linejoin="miter" stroke-linecap="butt" d="M12 17V2"></path><path stroke-linecap="square" stroke-linejoin="miter" d="M18 8l-6-6-6 6"></path></g></svg>
                  
                  <span class="margin-left-xxs file-upload__text file-upload__text--has-max-width">Upload Video</span>
                </span>
              </label> 
            
              <input type="file" class="file-upload__input" name="upload2" id="upload2" multiple>
            </div>
          </section>

          <!--Tab3 Content-->
          <section id="tab1Panel3" class="padding-top-md js-tabs__panel">
            <form>
              <fieldset class="margin-bottom-md">
                <legend class="form-legend">Form Legend</legend>

                <div class="grid gap-sm">
                    <label class="form-label margin-bottom-xxs" for="input-name">SEO Page Title</label>
                    <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>
                  <div>

                  </div>
                </div>
              </fieldset>
            </form>
          </section>
        </div>

        <!-- 👇 End Tab Panels -->
      </div><!-- /.padding-y-sm padding-x-md flex-grow overflow-auto -->

      <footer class="padding-y-sm padding-x-md bg shadow-md flex-shrink-0">
        <div class="flex justify-end gap-xs">
          <button type="button" class="btn btn--subtle js-modal__close">Cancel</button>
          <button type="submit" class="btn btn--primary">Save</button>
          <button type="submit" class="btn btn--primary">Publish</button>
        </div>
      </footer>
    </form>
  </div><!-- /.modal__content -->

</div><!-- /.modal -->
<!-- Full Screen Modal End -->

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
</div><!-- /.modal -->