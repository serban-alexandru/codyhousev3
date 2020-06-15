@extends('admin::layouts.master')
@section('content')
@include('admin::layouts.users-nav')

<!-- 👇 Modal Search -->
<div class="modal modal--search modal--animate-fade flex flex-center padding-md js-modal"
    id="modal-search">
    <div class="modal__content width-100% max-width-sm" role="alertdialog"
        aria-labelledby="modal-search-title" aria-describedby="">
        <form class="full-screen-search">
            <label for="search-input-x" id="modal-search-title" class="sr-only">Search</label>
            <input class="reset full-screen-search__input" type="search" name="search-input-x"
                id="search-input-x" placeholder="Search...">
            <button class="reset full-screen-search__btn">
                <svg class="icon" viewBox="0 0 24 24">
                    <title>Search</title>
                    <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2"
                        stroke="currentColor" fill="none" stroke-miterlimit="10">
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
</div>
<!-- End Modal Search -->

<!-- 👇 Full Screen Modal -->
<div class="modal modal--animate-fade bg-contrast-higher bg-opacity-90% js-modal" id="modal-full-width">
  <div class="modal__content bg height-100% flex flex-column tabs js-tabs" role="alertdialog" aria-labelledby="modal-title" aria-describedby="modal-description">
    <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
      <!-- 👇 Tabs Navigation -->
      <ul class="flex flex-wrap gap-sm js-tabs__controls" aria-label="Tabs Interface">
        <li><a href="#tab1Panel1" class="tabs__control" aria-selected="true">Tab 1</a></li>
        <li><a href="#tab1Panel2" class="tabs__control">Tab 2</a></li>
        <li><a href="#tab1Panel3" class="tabs__control">Tab 3</a></li>
        <li><a href="#tab1Panel4" class="tabs__control">Tab 4</a></li>
        <li><a href="#tab1Panel5" class="tabs__control">Tab 5</a></li>
      </ul>
      <!-- End Tabs Navigation -->

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
      <div class="text-component v-space-md line-height-lg">
        <!-- 👇 Tab Panels -->
        <div class="js-tabs__panels">
            <section id="tab1Panel1" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatibus expedita. Laboriosam maxime aut dolorem eum qui nemo! Ea!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati natus totam assumenda cumque numquam culpa officia, harum vel quibusdam recusandae, blanditiis non quae pariatur? Laborum, animi dolor tempora laboriosam minus nulla sit, hic molestias velit delectus sint aspernatur possimus soluta?</p>
              </div>
            </section>

            <section id="tab1Panel2" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 2</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
              </div>
            </section>

            <section id="tab1Panel3" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 3</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, veritatis.</p>
              </div>
            </section>

            <section id="tab1Panel4" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 4</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, ipsa. Maiores sit totam dignissimos perferendis recusandae quis eligendi quos expedita consequatur, natus debitis, deserunt placeat tenetur odit voluptates, ad nihil cum ipsa quae est facere, voluptate sapiente tempora a officiis. Ipsa perspiciatis aut commodi enim expedita. Saepe at cupiditate quaerat explicabo distinctio quae enim, ab impedit! Sunt, omnis, sit magnam id exercitationem mollitia alias pariatur doloremque nulla. Totam quis, animi minus error molestias sit. Quidem, dolor, aspernatur. Voluptates, magni, provident?</p>
              </div>
            </section>

            <section id="tab1Panel5" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 5</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam modi nesciunt eum, dolores corrupti labore assumenda vel? Cupiditate fugit nihil, sunt nulla nisi blanditiis quidem, eos nesciunt. Quidem dolorem laudantium, ex fuga natus nisi error architecto saepe sapiente dolores assumenda.</p>
              </div>
            </section>
          </div>
        <!-- 👇 End Tab Panels -->
      </div><!-- /.text-component -->
    </div><!-- /.padding-y-sm -->

    <footer class="padding-y-sm padding-x-md bg shadow-md">
      <div class="flex justify-end gap-xs">
        <button class="btn btn--subtle js-modal__close">Cancel</button>
        <button class="btn btn--primary">Install</button>
      </div>
    </footer>
  </div><!-- /.modal__content -->
</div>
<!-- Full Screen Modal End -->

@endsection
