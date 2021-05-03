<?php

namespace Modules\Admin\Http\Controllers;

use Arr, Str, Image, File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Modules\Admin\Entities\Settings;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller {
  public function index() {
    $settings_data = Settings::getSiteSettings();
    $fonts = Settings::getFontsList();
    $disable_shortcode = true;

    // Get all available templates.
    $current_template = $settings_data['app_template'];

    $template_files = File::allFiles(resource_path('views/templates/apps'));
    $templates = [];
    array_push($templates, [
      "name" => "default",
      "checked" => $current_template === "default" ? "checked" : ""
    ]);
    foreach($template_files as $file) {
      $filename = basename($file, ".blade.php");

      if ($filename !== 'default') {
        array_push($templates, [
          "name" => $filename,
          "checked" => $current_template === $filename ? "checked" : ""
        ]);
      }
    }

    return view('admin::partials.setting', compact('settings_data', 'fonts', 'disable_shortcode', 'templates'))->withoutShortcodes();
  }

  /**
   * Store a newly created resource in storage.
   * @param Request $request
   * @return Renderable
   */
  public function store(Request $request) {
    $setting_keys = [
      'logo_title',
      'logo_svg',
      'favicon',
      'page_title',
      'meta_title',
      'post_page_title',
      'post_meta_title',
      'tag_page_title',
      'tag_meta_title',
      'profile_page_title',
      'profile_meta_title',
      'font_logo',
      'font_primary',
      'font_secondary',
      'tracker_script',
      'reg_en_fullname',
      'reg_en_verify_email',
      'notify_from_email',
      'template_email_confirm',
      'template_forgot_password',
      'app_template'
    ];

    $checkbox_keys = [
      'reg_en_fullname',
      'reg_en_verify_email'
    ];

    $validator = Validator::make($request->all(), [
        'logo_title' => 'required|max:30',
        'page_title' => 'required|max:70',
        'meta_title' => 'required|max:70',
        'post_page_title' => 'required|max:70',
        'post_meta_title' => 'required|max:70',
        'tag_page_title' => 'required|max:70',
        'tag_meta_title' => 'required|max:70',
        'profile_page_title' => 'required|max:100',
        'profile_meta_title' => 'required|max:100',
        'logo_svg' => 'required',
        'favicon' => 'required',
        'font_logo' => 'required',
        'font_primary' => 'required',
        'font_secondary' => 'required'
    ],
    $messages = [
      'required' => 'The :attribute field is required.',
      'max' => 'The :attribute field is too long!.',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'status' => false,
        'message' => 'Setting Data has been saved!',
        'errors' => $validator->errors()
      ]);
    }

    // get existing settings data
    $settings_data = Settings::getSiteSettings();

    // check if setting data is already added to database
    $dateNow = now();

    $insert_data = array();
    $update_data = array();
    foreach ($setting_keys as $key) {
      $default_val = '';
      if (in_array($key, $checkbox_keys)) {
        $default_val = 'off';
      }
      $req_param = !empty($request->input($key)) ? $request->input($key) : $default_val;

      if (isset($settings_data[$key]))
        $update_data[$key] = $req_param;
      else
        $insert_data[] = array('key' => $key, 'value' => $req_param, 'created_at' => $dateNow, 'updated_at' => $dateNow);
    }

    if (count($insert_data) > 0) {
      // do insert action
      Settings::insert($insert_data);
    }

    if (count($update_data) > 0) {
      foreach ($update_data as $key => $value) {
        $row = Settings::where('key', $key);
        $row->update(['value' => $value]);
      }
    }

    return response()->json([
      'status' => true,
      'message' => 'Setting Data has been saved!',
      'data' => $update_data
    ]);
  }
}
