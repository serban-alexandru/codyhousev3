<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

use Modules\Admin\Providers\AdminServiceProvider;

class Settings extends Model
{
  public static $gFonts = AdminServiceProvider::GOOGLE_FONTS;
  public static $primary_font = AdminServiceProvider::PRIMARY_FONT;
  public static $secondary_font = AdminServiceProvider::SECONDARY_FONT;

  public static function getSiteSettings()
  {
    $setting_data = array();
    if (Schema::hasTable('settings')) {
      $settings = Settings::all();

      foreach($settings as $data) {
        $setting_data[$data['key']] = $data['value'];
      }
    }
    
    // set default fonts if not exist
    if (empty($setting_data['font_primary']))
      $setting_data['font_primary'] = self::$primary_font;

    if (empty($setting_data['font_secondary']))
      $setting_data['font_secondary'] = self::$secondary_font;

    return $setting_data;
  }

  public static function getGoogleFontsList() {
    return self::$gFonts;
  }
}
