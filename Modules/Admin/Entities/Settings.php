<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Settings extends Model
{
    public static function getSiteSettings()
    {
        $setting_data = array();
        if (Schema::hasTable('settings')) {
          $settings = Settings::all();

          foreach($settings as $data) {
            $setting_data[$data['key']] = $data['value'];
          }
        }
        
        return $setting_data;
    }
}
