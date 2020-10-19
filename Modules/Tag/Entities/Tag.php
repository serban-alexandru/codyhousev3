<?php

namespace Modules\Tag\Entities;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the tag category record associated with the tag.
     *
     * @return void
     */
    public function tag()
    {
        return $this->hasOne('Modules\Tag\Entities\TagCategory');
    }
}
