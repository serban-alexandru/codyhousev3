<!-- 👇 Full Screen Modal -->
<div class="custom-modal modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal custom-modal-hide-body-scroll" id="modal-add-blog">
  <div class="modal__content height-100% tabs js-tabs width-100% max-width-xs bg radius-md shadow-md flex flex-column" role="alertdialog" aria-labelledby="modal-add-blog-title" aria-describedby="modal-description-4">
    <form action="{{ url('admin/blog/store') }}" id="modal-form-add-blog" class="modal-form flex flex-column height-100%" method="post"> @csrf
      <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
        <!-- 👇 Tabs -->
        <nav class="">
          <ul class="flex flex-wrap gap-sm js-tabs__controls" aria-label="Tabs Interface">
            <li><a href="#tab1Panel1" class="tabs__control" aria-selected="true">Blog</a></li>
            <li><a href="#tab1Panel2" class="tabs__control">Images</a></li>
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

      <div class="padding-y-sm padding-x-md flex-grow overflow-auto">
        <div class="js-tabs__panels">
          <section id="tab1Panel1" class="padding-top-md js-tabs__panel">
            <div class="text-component">
              <h1 class="text-lg">New blog</h1>
              <div id="ajax-add-blog-form">Loading...</div><!-- /#ajax-add-blog-form -->
            </div>
          </section>

          <section id="tab1Panel2" class="padding-top-md js-tabs__panel">
            <div class="text-component">
              <h1 class="text-lg">Panel 2</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
            </div>
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

<!-- 👇 Full Screen Modal -->
<div class="custom-modal modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal custom-modal-hide-body-scroll" id="modal-edit-blog">
  <div class="modal__content height-100% tabs js-tabs width-100% max-width-xs bg radius-md shadow-md flex flex-column" role="alertdialog" aria-labelledby="modal-edit-blog-title" aria-describedby="modal-description-4">
    <form action="#" method="POST" id="modal-edit-blog-form" class="modal-form  flex flex-column height-100%"> @csrf
      <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
        <!-- 👇 Tabs -->
        <nav class="">
          <ul class="flex flex-wrap gap-sm js-tabs__controls" aria-label="Tabs Interface">
            <li><a href="#tab2Panel1" class="tabs__control" aria-selected="true">Blog</a></li>
            <li><a href="#tab2Panel2" class="tabs__control">Images</a></li>
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

      <div class="padding-y-sm padding-x-md flex-grow overflow-auto">
        <div class="js-tabs__panels">
          <section id="tab2Panel1" class="padding-top-md js-tabs__panel">
            <div class="text-component">
              <h1 class="text-lg">Edit blog</h1>
              <div id="ajax-edit-blog-form">Loading...</div><!-- /#ajax-edit-blog-form -->
            </div>
          </section>

          <section id="tab2Panel2" class="padding-top-md js-tabs__panel">
            <div class="text-component">
              <h1 class="text-lg">Edit Images</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
            </div>
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