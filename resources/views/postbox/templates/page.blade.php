<div class="box-header padding-sm">
  <div class="flex flex-wrap gap-xs items-center">
    <div class="line-height-xs">
      <h3 class="box-title text-left">Create Page</h3>
    </div>
  </div>
</div>
<div class="border-top border-contrast-lower"></div>
<div class="box-content padding-sm">
  <div class="editorjs-fullwidth">
    <input type="hidden" name="type" value="page"/>
    <input type="hidden" name="is_published"/>
    <div class="flex">
      <div class="height-100% width-100% bg radius-md flex flex-column">

        <div class="padding-y-sm flex-grow overflow-auto">
          <h1 class="js-input custom-input custom-input__title" placeholder="Title" target="title" required></h1>
          <input type="hidden" id="title" name="title" value="">
          
          <div class="grid gap-sm">
            <div id="editorjs" data-target-input="#description" class="site-editor"></div>
            <input type="hidden" name="description" id="description"/>
          </div>
        </div><!-- /.padding-y-sm flex-grow overflow-auto -->
      </div><!-- /.modal__content -->
    </div><!-- /.modal -->
  </div>
</div>
