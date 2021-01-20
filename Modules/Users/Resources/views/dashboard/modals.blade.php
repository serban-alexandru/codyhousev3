<!-- 👇 Full Screen Modal -->
<form action="#" id="formAddPost">
  @csrf
  <div class="custom-modal modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal custom-modal-hide-body-scroll custom-disable-modal-close" id="modal-add-article">
    <div class="modal__content height-100% width-100% max-width-sm bg radius-md shadow-md flex flex-column">
      <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
        <button type="button" class="btn btn--subtle btn-full-screen" title="Expand to full screen">
          Full Screen
        </button>
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

      <div class="padding-y-sm padding-x-md flex-grow overflow-auto">
        <div class="padding-top-xs">
          <div class="grid gap-sm">
            <input class="form-control width-100%" type="text" name="title" id="title" placeholder="Enter Your Title" required>
            <div id="editorjs" data-target-input="#description" class="site-editor form-control"></div>
            <input type="hidden" name="description" id="description"/>
          </div>
        </div>

        <div class="padding-top-xs">
          <input type="file" id="realThumbnail" class="is-hidden">
          <div class="ddf">
            <div class="ddf__area padding-y-xl padding-x-md js-ddf__area">
              <input class="ddf__input sr-only js-ddf__input" type="file" id="upload-file" name="thumbnail" accept="image/*" required>

              <label class="ddf__label js-ddf__label" for="upload-file">
                <i class="ddf__label-inner">
                  <svg class="icon icon--xl color-contrast-higher ddf__icon-cloud" viewBox="0 0 64 64" aria-hidden="true"><path fill="currentColor" d="M51,27c-.374,0-.742.025-1.109.056a18,18,0,0,0-35.782,0C13.742,27.025,13.374,27,13,27a13,13,0,0,0,0,26H51a13,13,0,0,0,0-26Z"/><path d="M43.764,41.354l-11-13a1.033,1.033,0,0,0-1.526,0l-11,13A1,1,0,0,0,21,43h7V59h8V43h7a1,1,0,0,0,.764-1.646Z" fill="var(--color-bg)"/></svg>

                  <span class="text-md text-bold color-contrast-higher">Drag and drop your files here</span>

                  <span class="color-contrast-medium padding-top-xxxs inline-block">or click to browse your files</span>
                </i>
              </label>

              <span class="ddf__label-end">
                <i class="ddf__label-end-inner">
                  <svg class="icon icon--xl color-contrast-higher ddf__icon-file" viewBox="0 0 64 64" aria-hidden="true"><path fill="currentColor" d="M1.4,16.868,7,15.636,18.972,13A1.783,1.783,0,0,1,21.1,14.359L28.21,46.683a1.783,1.783,0,0,1-1.358,2.124L9.28,52.675a1.784,1.784,0,0,1-2.124-1.358L.042,18.993A1.783,1.783,0,0,1,1.4,16.868Z" opacity="0.69"/><path fill="currentColor" d="M62.6,16.868,57,15.636,45.028,13A1.783,1.783,0,0,0,42.9,14.359L35.79,46.683a1.783,1.783,0,0,0,1.358,2.124L54.72,52.675a1.784,1.784,0,0,0,2.124-1.358l7.114-32.324A1.783,1.783,0,0,0,62.6,16.868Z" opacity="0.69"/><rect fill="currentColor" x="13" y="9" width="38" height="46" rx="2"/><path d="M42.941,41.664l-5-14a1,1,0,0,0-1.624-.4l-15,14A1,1,0,0,0,22,43H42a1,1,0,0,0,.941-1.336Z" fill="#fff"/><circle cx="24" cy="26" r="3" fill="var(--color-bg)"/></svg>

                  <!-- {n} will be replaced by the total number of files -->
                  <!-- use % symbol for singular/plural - only one will be shown  -->
                  <span class="js-ddf__files-counter">{n} selected %file%files%</span>

                  <div class="ddf__progress c-progress-bar is-hidden margin-x-auto margin-top-xxs js-ddf__progress" data-progress="0%">
                    <p class="sr-only" aria-live="polite" aria-atomic="true">Progress value is <span class="js-c-progress-bar__aria-value">0%</span></p>

                    <div class="c-progress-bar__shape" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round">
                        <g> <!-- check + circle bg -->
                          <circle class="ddf__progress-circle" cx="12" cy="12" r="11" stroke-width="2"></circle>
                          <circle class="ddf__progress-circle-mask" cx="12" cy="12" r="11" stroke-width="2"></circle>
                          <polyline class="ddf__progress-check" points="6 12 10 16 18 8" fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </g>

                        <g> <!-- progress loader -->
                          <circle class="c-progress-bar__bg" cx="12" cy="12" r="11" stroke-width="2"></circle>
                          <circle class="c-progress-bar__fill" cx="12" cy="12" r="11" stroke-width="2"></circle>
                        </g>
                      </svg>
                    </div>
                  </div>
                </i>
              </span>
            </div>
          </div>
        </div>

        <div class="padding-top-xs">
          <div class="post-tag-wrp add-post-tag">
            <div class="alert alert--error margin-top-sm js-alert" role="alert">
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <svg aria-hidden="true" class="icon margin-right-xxxs" viewBox="0 0 32 32" ><title>info icon</title><g><path d="M16,0C7.178,0,0,7.178,0,16s7.178,16,16,16s16-7.178,16-16S24.822,0,16,0z M18,7c1.105,0,2,0.895,2,2 s-0.895,2-2,2s-2-0.895-2-2S16.895,7,18,7z M19.763,24.046C17.944,24.762,17.413,25,16.245,25c-0.954,0-1.696-0.233-2.225-0.698 c-1.045-0.92-0.869-2.248-0.542-3.608l0.984-3.483c0.19-0.717,0.575-2.182,0.036-2.696c-0.539-0.514-1.794-0.189-2.524,0.083 l0.263-1.073c1.054-0.429,2.386-0.954,3.523-0.954c1.71,0,2.961,0.855,2.961,2.469c0,0.151-0.018,0.417-0.053,0.799 c-0.066,0.701-0.086,0.655-1.178,4.521c-0.122,0.425-0.311,1.328-0.311,1.765c0,1.683,1.957,1.267,2.847,0.847L19.763,24.046z"></path></g></svg>
                  <p>Please fill at least one tag.</p>
                </div>
                <button class="reset alert__close-btn js-alert__close-btn">
                  <svg class="icon" viewBox="0 0 24 24"><title>Close alert</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="19" y1="5" x2="5" y2="19"></line><line fill="none" x1="19" y1="19" x2="5" y2="5"></line></g></svg>
                </button>
              </div>
            </div>
            @foreach($tag_categories as $key=> $tag_category)
            <div class="grid gap-sm">
                <label class="form-label margin-bottom-xxs" for="tag_category_{{ $tag_category->id }}">
                  Add {{ $tag_category->name }}
                </label>
                <select name="tag_category_{{ $tag_category->id }}[]" id="tag_category_{{ $tag_category->id }}" class="site-tag-pills" multiple></select>
            </div>
            @endforeach
          </div>
        </div>
      </div><!-- /.padding-y-sm padding-x-md flex-grow overflow-auto -->

      <footer class="padding-y-sm padding-x-md bg shadow-md flex-shrink-0">
        <div class="flex justify-end gap-xs">
          <button type="button" class="btn btn--subtle js-modal__close">Cancel</button>
          <button type="button" id="btnSave" class="btn btn--primary site-editor" data-target-input="#description">Save</button>
          <button type="button" id="btnPublish" class="btn btn--primary site-editor" data-target-input="#description">Publish</button>
        </div>
      </footer>
    </div><!-- /.modal__content -->
  </div><!-- /.modal -->
<!-- Full Screen Modal End -->
</form>

<div class="modal modal--search modal--animate-fade flex flex-center padding-md js-modal" id="modal-search">
  <div class="modal__content width-100% max-width-sm" role="alertdialog" aria-labelledby="modal-search-title" aria-describedby="">
    <form class="full-screen-search" action="{{ url('dashboard') }}" method="GET">
      <label for="search-input-x" id="modal-search-title" class="sr-only">Search</label>
      <input class="reset full-screen-search__input" type="search" name="postsearch" id="search-input-x" placeholder="Search..." required>
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
