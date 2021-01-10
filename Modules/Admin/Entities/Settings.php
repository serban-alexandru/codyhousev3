<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public static function getSiteSettings()
    {
        $settings = Settings::all();

        $setting_data = array();
        foreach($settings as $data) {
          $setting_data[$data['key']] = $data['value'];
        }

        return $setting_data;
    }
}
