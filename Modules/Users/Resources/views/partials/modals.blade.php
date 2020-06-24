@guest
<!-- SIGN IN MODAL START -->
  <div class="cd-signin-modal js-signin-modal">
    <!-- this is the entire modal form, including the background -->
    <div class="cd-signin-modal__container">
      <!-- this is the container wrapper -->
      <ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
        <li>
          <a href="#0" data-signin="login" data-type="login">Sign in</a>
        </li>
        <li>
          <a href="#0" data-signin="signup" data-type="signup">New account</a>
        </li>
      </ul>

      <div class="cd-signin-modal__block js-signin-modal-block" data-type="login">
        <!-- log in form -->
        <div id="ajax-signin-form" class="custom-ajax-frame-loader" data-custom="ajax" data-loaded="false" data-url="{{ route('login.ajax') }}">Loading...</div><!-- /#ajax-signin-form -->
        <p class="cd-signin-modal__bottom-message js-signin-modal-trigger">
          <a href="#0" data-signin="reset">Forgot your password?</a>
        </p>
      </div>
      <!-- cd-signin-modal__block -->

      <div class="cd-signin-modal__block js-signin-modal-block" data-type="signup">
        <!-- sign up form -->
        <div id="ajax-signup-form" class="custom-ajax-frame-loader" data-custom="ajax" data-loaded="false" data-url="{{ route('register.ajax') }}">Loading...</div><!-- /#ajax-signup-form -->
      </div>
      <!-- cd-signin-modal__block -->

      <div class="cd-signin-modal__block js-signin-modal-block" data-type="reset">
        <!-- reset password form -->
        <div id="ajax-resetpassword-form" class="custom-ajax-frame-loader" data-custom="ajax" data-loaded="false" data-url="{{ route('password.reset.ajax') }}">Loading...</div><!-- /#ajax-resetpassword-form -->
        <p class="cd-signin-modal__bottom-message js-signin-modal-trigger">
          <a href="#0" data-signin="login">Back to log-in</a>
        </p>
      </div>
      <!-- cd-signin-modal__block -->

      <a href="#0" class="cd-signin-modal__close js-close">Close</a>
    </div>
    <!-- cd-signin-modal__container -->
  </div>
  <!-- cd-signin-modal -->
<!-- SIGN IN MODAL START -->
@endguest

<!-- 👇 Full Screen Modal -->
<div class="custom-modal modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal custom-modal-hide-body-scroll" id="modal-add-user">
  <div class="modal__content tabs js-tabs width-100% max-width-xs bg radius-md shadow-md flex flex-column" role="alertdialog" aria-labelledby="modal-add-user-title" aria-describedby="modal-description-4">
    <form action="{{ url('admin/users/store') }}" id="modal-form-add-user" class="modal-form flex flex-column height-100%" method="post"> @csrf
      <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
        <!-- 👇 Tabs -->
        <nav class="">
          <ul class="flex flex-wrap gap-sm js-tabs__controls" aria-label="Tabs Interface">
            <li><a href="#tab1Panel1" class="tabs__control" aria-selected="true">User</a></li>
            <li><a href="#tab1Panel2" class="tabs__control">Tab 2</a></li>
            <li><a href="#tab1Panel3" class="tabs__control">Tab 3</a></li>
            <li><a href="#tab1Panel4" class="tabs__control">Tab 4</a></li>
            <li><a href="#tab1Panel5" class="tabs__control">Tab 5</a></li>
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
                <h1 class="text-lg">New user</h1>
                <div id="ajax-add-user-form">Loading...</div><!-- /#ajax-add-user-form -->
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
<div class="modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal custom-modal-hide-body-scroll" id="modal-edit-user">
  <div class="modal__content width-100% max-width-xs bg radius-md shadow-md flex flex-column" role="alertdialog" aria-labelledby="modal-edit-user-title" aria-describedby="modal-description-4">
    <form action="#" method="POST" id="modal-edit-user-form" class="modal-form"> @csrf
      <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between flex-shrink-0">
        <h4 class="text-truncate" id="modal-edit-user-title">Edit User</h4>

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
      <div id="ajax-edit-user-form">Loading...</div><!-- /#ajax-edit-user-form -->
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