<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;

class PostsTag extends Model
{
    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo('Modules\Users\Entities\Post');
    }

}
