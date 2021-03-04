@extends('admin::layouts.master')
@section('content')
  <section>
    <div class="container max-width-lg margin-top-lg">
        <div class="alert js-alert margin-bottom-lg" role="alert">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <svg aria-hidden="true" class="icon margin-right-xxxs" viewBox="0 0 32 32" ><title>info icon</title><g><path d="M16,0C7.178,0,0,7.178,0,16s7.178,16,16,16s16-7.178,16-16S24.822,0,16,0z M18,7c1.105,0,2,0.895,2,2 s-0.895,2-2,2s-2-0.895-2-2S16.895,7,18,7z M19.763,24.046C17.944,24.762,17.413,25,16.245,25c-0.954,0-1.696-0.233-2.225-0.698 c-1.045-0.92-0.869-2.248-0.542-3.608l0.984-3.483c0.19-0.717,0.575-2.182,0.036-2.696c-0.539-0.514-1.794-0.189-2.524,0.083 l0.263-1.073c1.054-0.429,2.386-0.954,3.523-0.954c1.71,0,2.961,0.855,2.961,2.469c0,0.151-0.018,0.417-0.053,0.799 c-0.066,0.701-0.086,0.655-1.178,4.521c-0.122,0.425-0.311,1.328-0.311,1.765c0,1.683,1.957,1.267,2.847,0.847L19.763,24.046z"></path></g></svg>
              <div class="msg-container">
              </div>
            </div>

            <button class="reset alert__close-btn js-alert__close-btn">
              <svg class="icon" viewBox="0 0 24 24"><title>Close alert</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="19" y1="5" x2="5" y2="19"></line><line fill="none" x1="19" y1="19" x2="5" y2="5"></line></g></svg>
            </button>
          </div>
        </div>

        <h1>Site Settings</h1>
        <form id="formSetting" method="POST">
            @csrf
            <fieldset class="margin-bottom-md margin-top-md">
                
              <div class="floating-label margin-bottom-md">
                <label class="form-label" for="logo_title">Enter Logo Title</label>
                <input class="form-control width-100%" type="text" name="logo_title" id="logo_title" value="{{ !empty($settings_data['logo_title']) ? $settings_data['logo_title'] : '' }}" placeholder="Enter Logo Title" required>
              </div>

              <div class="floating-label margin-bottom-md">
                <label class="form-label" for="logo_svg">Paste your Logo SVG</label>
                <textarea class="form-control width-100%" name="logo_svg" id="logo_svg" placeholder="Paste your Logo SVG" required>{{ !empty($settings_data['logo_svg']) ? $settings_data['logo_svg'] : '' }}</textarea>
              </div>

              <div class="floating-label margin-bottom-md">
                <label class="form-label" for="favicon">Paste your favicon SVG</label>
                <input class="form-control width-100%" name="favicon" id="favicon" value="{{ !empty($settings_data['favicon']) ? $settings_data['favicon'] : '' }}" placeholder="Paste your favicon path" required>
              </div>

              <h1>SEO Settings</h1>

              <div class="form-control-section">
                <h4>Home Page</h4>
                <div class="floating-label margin-bottom-md margin-top-md">
                  <label class="form-label" for="page_title">Index Page Title</label>
                  <input class="form-control width-100%" type="text" name="page_title" id="page_title" value="{{ !empty($settings_data['page_title']) ? $settings_data['page_title'] : '' }}" placeholder="Index Page Title" required>
                </div>

                <div class="floating-label margin-bottom-md margin-top-xs">
                  <label class="form-label" for="meta_title">Tag Page Title</label>
                  <input class="form-control width-100%" type="text" name="meta_title" id="meta_title" value="{{ !empty($settings_data['meta_title']) ? $settings_data['meta_title'] : '' }}" placeholder="Tag Page Title" required>
                </div>
              </div>

              <div class="form-control-section">
                <h4>Profile Page</h4>
                <div class="floating-label margin-bottom-md margin-top-md">
                  <label class="form-label" for="profile_page_title">Page Title</label>
                  <input class="form-control width-100%" type="text" name="profile_page_title" id="profile_page_title" value="{{ !empty($settings_data['profile_page_title']) ? $settings_data['profile_page_title'] : '' }}" placeholder="Profile Page Title" required>
                </div>

                <div class="floating-label margin-bottom-md margin-top-xs">
                  <label class="form-label" for="profile_meta_title">Meta Title</label>
                  <input class="form-control width-100%" type="text" name="profile_meta_title" id="profile_meta_title" value="{{ !empty($settings_data['profile_meta_title']) ? $settings_data['profile_meta_title'] : '' }}" placeholder="Profile Meta Title" required>
                </div>
              </div>

              <div class="form-control-section">
                <h4>Post Page</h4>
                <div class="floating-label margin-bottom-md margin-top-md">
                  <label class="form-label" for="post_page_title">Page Title</label>
                  <input class="form-control width-100%" type="text" name="post_page_title" id="post_page_title" value="{{ !empty($settings_data['post_page_title']) ? $settings_data['post_page_title'] : '' }}" placeholder="Post Page Title" required>
                </div>

                <div class="floating-label margin-bottom-md margin-top-xs">
                  <label class="form-label" for="post_meta_title">Meta Title</label>
                  <input class="form-control width-100%" type="text" name="post_meta_title" id="post_meta_title" value="{{ !empty($settings_data['post_meta_title']) ? $settings_data['post_meta_title'] : '' }}" placeholder="Post Meta Title" required>
                </div>
              </div>

              <div class="form-control-section">
                <h4>Tag Page</h4>
                <div class="floating-label margin-bottom-md margin-top-md">
                  <label class="form-label" for="tag_page_title">Page Title</label>
                  <input class="form-control width-100%" type="text" name="tag_page_title" id="tag_page_title" value="{{ !empty($settings_data['tag_page_title']) ? $settings_data['tag_page_title'] : '' }}" placeholder="Tag Page Title" required>
                </div>

                <div class="floating-label margin-bottom-md margin-top-xs">
                  <label class="form-label" for="tag_meta_title">Meta Title</label>
                  <input class="form-control width-100%" type="text" name="tag_meta_title" id="tag_meta_title" value="{{ !empty($settings_data['tag_meta_title']) ? $settings_data['tag_meta_title'] : '' }}" placeholder="Tag Meta Title" required>
                </div>
              </div>

              <div class="form-control-section">
                <h4>Font Setting</h4>
                <div class="floating-label margin-bottom-md margin-top-md">
                  <label class="form-label margin-bottom-xxxs" for="font_logo">Logo Font:</label>

                  <?php $logofont = ($settings_data['font_logo']) ? $settings_data['font_logo'] : ''; ?>
                  <div class="select inline-block js-select" data-trigger-class="btn btn--subtle">
                    <select class="form-control" name="font_logo" id="font_logo" data-placeholder="Select Logo Font">
                    @foreach($fonts as $font_name)
                      <option
                        value="{{ $font_name }}"
                        @if($font_name == $logofont)
                          selected
                        @endif
                      >{{ $font_name }}</option>
                    @endforeach
                    </select>

                    <svg class="icon icon--xs margin-left-xxxs" aria-hidden="true" viewBox="0 0 16 16"><polygon points="3,5 8,11 13,5 "></polygon></svg>
                  </div>
                </div>

                <div class="floating-label margin-bottom-md margin-top-md">
                  <label class="form-label margin-bottom-xxxs" for="font_primary">Primary Font:</label>

                  <?php $primaryfont = ($settings_data['font_primary']) ? $settings_data['font_primary'] : ''; ?>
                  <div class="select inline-block js-select" data-trigger-class="btn btn--subtle">
                    <select class="form-control" name="font_primary" id="font_primary" data-placeholder="Select Primary Font">
                    @foreach($fonts as $font_name)
                      <option
                        value="{{ $font_name }}"
                        @if($font_name == $primaryfont)
                          selected
                        @endif
                      >{{ $font_name }}</option>
                    @endforeach
                    </select>

                    <svg class="icon icon--xs margin-left-xxxs" aria-hidden="true" viewBox="0 0 16 16"><polygon points="3,5 8,11 13,5 "></polygon></svg>
                  </div>
                </div>

                <div class="floating-label margin-bottom-md margin-top-xs">
                  <label class="form-label margin-bottom-xxxs" for="font_secondary">Secondary Font:</label>
                  <?php $secondaryfont = ($settings_data['font_secondary']) ? $settings_data['font_secondary'] : ''; ?>
                  <div class="select inline-block js-select" data-trigger-class="btn btn--subtle">
                    <select class="form-control" name="font_secondary" id="font_secondary" data-placeholder="Select Secondary Font">
                    @foreach($fonts as $font_name)
                      <option
                        value="{{ $font_name }}"
                        @if($font_name == $secondaryfont)
                          selected
                        @endif
                      >{{ $font_name }}</option>
                    @endforeach
                    </select>

                    <svg class="icon icon--xs margin-left-xxxs" aria-hidden="true" viewBox="0 0 16 16"><polygon points="3,5 8,11 13,5 "></polygon></svg>
                  </div>
                </div>
              </div>

              <div class="form-control-section">
                <h4>Registration Setting</h4>
                <div class="flex justify-between margin-bottom-md margin-top-xs">
                  <label class="form-label margin-bottom-xxxs" for="reg_en_fullname">First name and last name:</label>
                  <div class="flex justify-end">              
                    <div class="switch ">
                      <input class="switch__input" type="checkbox" name="reg_en_fullname" id="reg_en_fullname" {{ !empty($settings_data['reg_en_fullname']) && $settings_data['reg_en_fullname'] === 'on' ? 'checked' : '' }}>
                      <label class="switch__label" for="reg_en_fullname" aria-hidden="true">First name and last name</label>
                      <div class="switch__marker" aria-hidden="true"></div>
                    </div>
                  </div>
                </div>
                <div class="flex justify-between margin-bottom-md margin-top-xs">
                  <label class="form-label margin-bottom-xxxs" for="reg_en_verify_email">Email Confirmation:</label>
                  <div class="flex justify-end">              
                    <div class="switch ">
                      <input class="switch__input" type="checkbox" name="reg_en_verify_email" id="reg_en_verify_email" {{ !empty($settings_data['reg_en_verify_email']) && $settings_data['reg_en_verify_email'] === 'on' ? 'checked' : '' }}>
                      <label class="switch__label" for="reg_en_verify_email" aria-hidden="true">Email Confirmation</label>
                      <div class="switch__marker" aria-hidden="true"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-control-section">
                <h4>Email Templates Setting</h4>
                <div class="floating-label margin-bottom-md margin-top-md">
                  <label class="form-label" for="notify_from_email">Master Email</label>
                  <input class="form-control width-100%" type="text" name="notify_from_email" id="notify_from_email" value="{{ !empty($settings_data['notify_from_email']) ? $settings_data['notify_from_email'] : '' }}" placeholder="Main email for templates" required>
                </div>

                <div class="margin-bottom-md">
                  <textarea class="form-control width-100%" name="template_email_confirm" id="template_email_confirm" placeholder="Email Confirmation Template">{!! !empty($settings_data['template_email_confirm']) ? $settings_data['template_email_confirm'] : '' !!}</textarea>
                </div>

                <div class="margin-bottom-md">
                  <textarea class="form-control width-100%" name="template_forgot_password" id="template_forgot_password" placeholder="Forgot Password Email Template">{!! !empty($settings_data['template_forgot_password']) ? $settings_data['template_forgot_password'] : '' !!}</textarea>
                </div>
              </div>

              <div class="form-control-section">
                <h4>Tracking Script</h4>
                <div class="floating-label margin-bottom-md">
                  <label class="form-label" for="tracker_script">Paste your Matomo Tracker Script</label>
                  <textarea class="form-control width-100%" name="tracker_script" id="tracker_script" placeholder="Paste your Matomo Tracker Script">{!! !empty($settings_data['tracker_script']) ? $settings_data['tracker_script'] : '' !!}</textarea>
                </div>
              </div>

              <button id="btnSave" class="btn btn--primary">Save</button>

            </fieldset>
          </form>
  </section>

@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('admin::partials.settings-script-js')
@endpush
