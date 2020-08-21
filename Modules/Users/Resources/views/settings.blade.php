@extends('admin::layouts.master')

@section('content')
  <section class="padding-y-md">
    <div class="container max-width-lg">
      <div class="grid gap-md@md">
        <div class="col-7@md offset-4@md">
          <h1 class="margin-bottom-sm">Account Info</h1>
          <form action="javascript:">
            <div class="author margin-bottom-md">
              <a href="#0" class="author__img-wrapper">
                <img src="{{ asset('assets/img/placeholder.jpg') }}" alt="Author picture">
              </a>
              <div class="author__content text-component padding-top-sm padding-left-xs">
                <div class="flex flex-wrap gap-sm">
                  <div class="file-upload inline-block">
                    <label for="avatar" class="file-upload__label btn btn--subtle">
                      <span class="file-upload__text file-upload__text--has-max-width">Upload a file</span>
                    </label>

                    <input type="file" class="file-upload__input" name="avatar" id="avatar" accept="image/*">
                  </div><!-- /.file-upload inline-block -->
                  <button type="button" class="btn btn--subtle btn--disabled" disabled>Delete</button><!-- /.btn btn--subtle -->
                </div><!-- /.flex flex-wrap -->
              </div><!-- /.author__content -->
            </div><!-- /.author -->
            <div class="margin-bottom-sm">
              <div class="grid gap-sm">
                <div class="col@md">
                  <label for="name" class="form-label">Name</label><!-- /.form-label -->
                  <input type="text" class="form-control width-100%" id="name" name="name" value="{{ $user->name }}">
                </div><!-- /.col@md -->
                <div class="col@md">
                  <label for="email" class="form-label">Email</label><!-- /.form-label -->
                  <input type="email" class="form-control width-100%" id="email" name="name" value="{{ $user->email }}">
                </div><!-- /.col@md -->
              </div><!-- /.grid gap-sm -->
            </div><!-- /.margin-bottom-sm -->
            <div class="margin-bottom-sm">
              <label for="password" class="form-label">Password</label><!-- /.form-label -->
              <div class="password js-password ">
                <input class="password__input form-control width-100% js-password__input" type="password" name="password" id="password">

                <button class="password__btn flex flex-center js-password__btn js-tab-focus">
                  <span class="password__btn-label" aria-label="Show password" title="Show password">
                    <svg class="icon block" viewBox="0 0 32 32"><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none"><path d="M1.409,17.182a1.936,1.936,0,0,1-.008-2.37C3.422,12.162,8.886,6,16,6c7.02,0,12.536,6.158,14.585,8.81a1.937,1.937,0,0,1,0,2.38C28.536,19.842,23.02,26,16,26S3.453,19.828,1.409,17.182Z" stroke-miterlimit="10"></path><circle cx="16" cy="16" r="6" stroke-miterlimit="10"></circle></g></svg>
                  </span>
                  <span class="password__btn-label" aria-label="Hide password" title="Hide password">
                    <svg class="icon block" viewBox="0 0 32 32"><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none"><path data-cap="butt" d="M8.373,23.627a27.659,27.659,0,0,1-6.958-6.445,1.938,1.938,0,0,1-.008-2.37C3.428,12.162,8.892,6,16.006,6a14.545,14.545,0,0,1,7.626,2.368" stroke-miterlimit="10" stroke-linecap="butt"></path><path d="M27,10.923a30.256,30.256,0,0,1,3.591,3.887,1.937,1.937,0,0,1,0,2.38C28.542,19.842,23.026,26,16.006,26A12.843,12.843,0,0,1,12,25.341" stroke-miterlimit="10"></path><path data-cap="butt" d="M11.764,20.243a6,6,0,0,1,8.482-8.489" stroke-miterlimit="10" stroke-linecap="butt"></path><path d="M21.923,15a6.005,6.005,0,0,1-5.917,7A6.061,6.061,0,0,1,15,21.916" stroke-miterlimit="10"></path><line x1="2" y1="30" x2="30" y2="2" fill="none" stroke-miterlimit="10"></line></g></svg>
                  </span>
                </button>
              </div>
            </div><!-- /.margin-bottom-sm -->
            <div class="margin-bottom-sm text-right">
              <button type="submit" class="btn btn--primary">Save</button><!-- /.btn btn--primary -->
            </div><!-- /.margin-bottom-sm -->
          </form>
        </div><!-- /.col-1 -->
      </div><!-- /.grid gap-md@md -->
    </div><!-- /.container max-width-lg -->
  </section><!-- /.padding-y-md -->
@endsection