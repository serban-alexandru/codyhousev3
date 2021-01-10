<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class PostSetting extends Model
{
	protected $table = 'posts_settings';

    protected $guarded = ['id'];
}
