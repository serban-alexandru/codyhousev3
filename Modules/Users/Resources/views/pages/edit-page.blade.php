<div class="max-width-sm mg-auto">
  <div class="edit-page-wrp editorjs-fullwidth hidden">
    <form action="{{ route('pages.update') }}" data-action="{{ route('pages.update') }}" id="formEditPage" method="POST" enctype="multipart/form-data" >
      @csrf
      <input type="hidden" id="pageId" name="page_id" value="">
      <input type="hidden" name="is_published"/>
      <div class="flex">
        <div class="height-100% width-100% bg radius-md flex flex-column">
            <div class="padding-y-sm flex-grow overflow-auto">
              <div class="padding-top-xs">
                <h1 id="editTitleElem" class="js-input custom-input custom-input__title" placeholder="Title" target="editTitle" required></h1>
                <input type="hidden" id="editTitle" name="title" value="">

                <div class="grid gap-sm">
                  <div id="editorjs2" data-target-input="#editDescription" class="site-editor"></div>
                  <input type="hidden" name="description" id="editDescription"/>
                </div>
              </div>

              <div class="padding-top-xs">
                <div class="margin-bottom-md">
                  <img src="#" id="thumbnailPreview" class="width-40%">
                </div>

                <div class="file-upload inline-block">

                  <label for="editThumbnail" class="file-upload__label btn btn--primary">
                    <span class="flex items-center">
                      <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="2"><path  stroke-linecap="square" stroke-linejoin="miter" d="M2 16v6h20v-6"></path><path stroke-linejoin="miter" stroke-linecap="butt" d="M12 17V2"></path><path stroke-linecap="square" stroke-linejoin="miter" d="M18 8l-6-6-6 6"></path></g></svg>
                      
                      <span class="margin-left-xxs file-upload__text file-upload__text--has-max-width">Edit Photo</span>
                    </span>
                  </label> 

                  <input type="file" class="file-upload__input" name="thumbnail" id="editThumbnail">
                </div>          
              </div>
            </div><!-- /.padding-y-sm flex-grow overflow-auto -->

            <footer class="padding-y-sm bg flex-shrink-0">
              <div class="flex justify-end gap-xs">
                <button type="button" class="btn btn--subtle btn-cancel-page">Cancel</button>
                <a href="#" type="button" class="btn btn--primary is-hidden draft-page-link trigger-site-editor-save" data-target-input="#editDescription" id="btnEditSaveDraft" data-toggle-published="0">Draft</a>
                <a href="#" type="button" class="btn btn--primary is-hidden publish-page-link trigger-site-editor-save" data-target-input="#editDescription" id="btnEditSavePublish" data-toggle-published="1">Publish</a>
                <a href="#" type="button" class="btn btn--primary is-hidden restore-page-link">Restore</a>
                <button type="button" class="btn btn--primary trigger-site-editor-save" data-target-input="#editDescription" id="btnEditSave">Save</button>
              </div>
            </footer>
        </div><!-- /.modal__content -->
      </div><!-- /.modal -->
    </form>
  </div>
</div>