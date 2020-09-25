<!-- 👇 Full Screen Modal -->
<div class="custom-modal modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal custom-modal-hide-body-scroll" id="modal-edit-post">
  <div class="modal__content height-100% tabs js-tabs width-100% max-width-sm bg radius-md shadow-md flex flex-column">
      <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
        <!-- 👇 Tabs -->
        <nav class="tabs">
          <ul class="flex flex-wrap gap-xl js-tabs__controls" aria-label="Tabs Interface">
            <li><a href="#tab1Panel1" class="tabs__control" aria-selected="true">Edit</a></li>
            <li><a href="#tab1Panel2" class="tabs__control">Images</a></li>
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
                <label class="form-label margin-bottom-xxs" for="input-name">Edit Your Title</label>
                <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>
              <div>

                <label class="form-label margin-bottom-xxs" for="input-name">Edit Discription</label>
              <div id="editorjs" class="form-control"></div><!-- /#ajax-edit-blog-form -->
            </div>
          </section>

        <!--Tab2 Content-->
          <section id="tab1Panel2" class="padding-top-md js-tabs__panel">

            <div class="margin-bottom-md">
            <img src="{{ asset('assets/img/team-img-13.jpg') }}"</a>
          </div>

            <div class="file-upload inline-block">
              <label for="upload1" class="file-upload__label btn btn--subtle">
                <span class="file-upload__text file-upload__text--has-max-width">Edit Photo</span>
              </label>
              
              <input type="file" class="file-upload__input" name="upload1" id="upload1">
            </div>
          </section>

          <!--Tab3 Content-->
          <section id="tab1Panel3" class="padding-top-md js-tabs__panel">
            <form>
              <fieldset class="margin-bottom-md">
                <legend class="form-legend">Form Legend</legend>

                <div class="grid gap-sm">
                    <label class="form-label margin-bottom-xxs" for="input-name">Edit SEO Page Title</label>
                    <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>
                  <div>

                <div class="grid gap-sm">
                    <label class="form-label margin-bottom-xxs" for="input-name">Edit Tags</label>
                    <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>
                <div>

                  <div class="flex flex-wrap gap-xxs">
                    <span class="btn btn--basic">Tag 1
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>ic_close_24px</title>
                        <g fill="#a8a8a8">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </g>
                    </svg>
                    </span>
                    <span class="btn btn--basic">Tag 2
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>ic_close_24px</title>
                        <g fill="#a8a8a8">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </g>
                    </svg>
                    </span>
                    <span class="btn btn--basic">Tag 3
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>ic_close_24px</title>
                        <g fill="#a8a8a8">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </g>
                    </svg>
                    </span>
                  </div>

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
        </div>
      </footer>
    </form>
  </div><!-- /.modal__content -->

</div><!-- /.modal -->
<!-- Full Screen Modal End -->