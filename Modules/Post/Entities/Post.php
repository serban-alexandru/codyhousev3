<?php

namespace Modules\Post\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Post\Entities\PostsTag;

class Post extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
    	return $this->belongsTo(\Modules\Users\Entities\User::class);
    }

    public function getThumbnail($type = 'original')
    {
    	if($type == 'original' && $this->thumbnail){
    		return storage_path() . '/app/public/posts/original/' . $this->thumbnail;
    	}

    	if($type == 'medium' && $this->thumbnail_medium){
    		return storage_path() . '/app/public/posts/thumbnail/' . $this->thumbnail_medium;
    	}

        return false;
    }

    public function showThumbnail($type = 'original')
    {
    	if($type == 'original'){
    		return asset('storage/posts/original') . '/' . $this->thumbnail;
    	}

    	if($type == 'medium'){
    		return asset('storage/posts/thumbnail') . '/' . $this->thumbnail_medium;
    	}
		}

		public function postsTag()
    {
        return $this->hasMany(PostsTag::class);
		}

}
