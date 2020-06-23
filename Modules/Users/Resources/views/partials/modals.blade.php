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
<div class="modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal custom-modal-hide-body-scroll" id="modal-add-user">
  <div class="modal__content width-100% max-width-xs bg radius-md shadow-md flex flex-column" role="alertdialog" aria-labelledby="modal-add-user-title" aria-describedby="modal-description-4">
    <form action="{{ url('admin/users/add') }}" id="modal-form-add-user" method="post">
      <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between flex-shrink-0">
        <h4 class="text-truncate" id="modal-add-user-title">Add User</h4>

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

      <div class="padding-y-sm padding-x-md flex-grow overflow-auto momentum-scrolling">
        <div>
          <label class="form-label margin-bottom-xxs" for="name">Name</label>
          <input class="form-control width-100%" type="text" name="name" id="name" required>
        </div>
        <div>
          <label class="form-label margin-bottom-xxs" for="email">Email</label>
          <input class="form-control width-100%" type="email" name="email" id="email" required>
        </div>
        <div>
          <label class="form-label margin-bottom-xxs" for="username">Username</label>
          <input class="form-control width-100%" type="text" name="username" id="username" required>
        </div>
        <div>
          <label class="form-label margin-bottom-xxs" for="password">Password</label>
          <input class="form-control width-100%" type="password" name="password" id="password" required>
        </div>
      </div>

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