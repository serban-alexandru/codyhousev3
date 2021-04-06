<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
	protected $table = 'pages_settings';

    protected $guarded = ['id'];
}
