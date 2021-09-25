<?php

namespace Modules\Tag\Entities;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Tag extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $guarded = ['id'];

    /**
     * Get the tag category record associated with the tag.
     *
     * @return void
     */
    public function tagCategory()
    {
        return $this->hasOne('Modules\Tag\Entities\TagCategory', 'id', 'tag_category_id');
    }

    public function getTagImage($collection = 'images') {
        $media = Media::where('model_type', __CLASS__)
            ->where('collection_name', $collection)
            ->where('model_id', $this->id)
            ->latest()
            ->first();
        return $media ? asset('storage') . '/' . $media->id . '/' . $media->file_name : '';
    }    
}
