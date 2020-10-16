<!-- 👇 Full Screen Modal -->
<form action="#" id="formEditPost">
  @csrf
  <input type="hidden" id="postId" value="">
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

          <button type="button" class="reset modal__close-btn modal__close-btn--inner js-modal__close js-tab-focus" id="closeEditModal">
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
                  <label class="form-label margin-bottom-xxs" for="editTitle">Edit Your Title</label>
                  <input class="form-control width-100%" type="text" name="title" id="editTitle" required>
                <div>
                  <label class="form-label margin-bottom-xxs" for="editDescription">Edit Discription</label>
                  <textarea name="description" id="editDescription" cols="30" rows="10"></textarea>
                </div>
            </section>

          <!--Tab2 Content-->
            <section id="tab1Panel2" class="padding-top-md js-tabs__panel">
              <div class="margin-bottom-md">
                <img src="#" id="thumbnailPreview" class="width-40%">
              </div>

              <div class="file-upload inline-block">
                <label for="editThumbnail" class="file-upload__label btn btn--subtle">
                  <span class="file-upload__text file-upload__text--has-max-width">Edit Photo</span>
                </label>
                
                <input type="file" class="file-upload__input" name="thumbnail" id="editThumbnail">
              </div>
            </section>

            <!--Tab3 Content-->
            <section id="tab1Panel3" class="padding-top-md js-tabs__panel">
                <fieldset class="margin-bottom-md">
                  <legend class="form-legend">Form Legend</legend>

                  <div class="grid gap-sm">
                      <label class="form-label margin-bottom-xxs" for="editPageTitle">Edit SEO Page Title</label>
                      <input class="form-control width-100%" type="text" name="page_title" id="editPageTitle" required>
                    <div>

                  <div class="grid gap-sm">
                      <label class="form-label margin-bottom-xxs" for="editTags">Edit Tags</label>
                      <select name="tags[]" id="editTags" class="form-control" multiple></select>
                  <div>

                    </div>
                  </div>
                </fieldset>
            </section>
          </div>

          <!-- 👇 End Tab Panels -->
        </div><!-- /.padding-y-sm padding-x-md flex-grow overflow-auto -->

        <footer class="padding-y-sm padding-x-md bg shadow-md flex-shrink-0">
          <div class="flex justify-end gap-xs">
            <button type="button" class="btn btn--subtle js-modal__close">Cancel</button>
            <a href="#" type="button" class="btn btn--primary is-hidden draft-post-link">Draft</a>
            <a href="#" type="button" class="btn btn--primary is-hidden publish-post-link">Publish</a>
            <a href="#" type="button" class="btn btn--primary is-hidden restore-post-link">Restore</a>
            <button type="button" class="btn btn--primary" id="btnEditSave">Save</button>
          </div>
        </footer>
    </div><!-- /.modal__content -->

  </div><!-- /.modal -->
<!-- Full Screen Modal End -->
</form>
