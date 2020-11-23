<?php

namespace Modules\Post\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Post\Entities\PostsTag;
use Modules\Tag\Entities\{Tag, TagCategory};

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

    public static function getByTagCategoryName($tag_category_query = null, $limit = null)
    {

        $tag_category = TagCategory::where('name', $tag_category_query)->first();

        // If tag category is not found -> return 404 | Not Found
        if (!$tag_category_query || !$tag_category) {
            return [];
        }

        // Get tags that use the tag category
        $tags       = Tag::where('tag_category_id', $tag_category->id)->get();

        // Get middle table `posts_tags`
        $posts_tags = PostsTag::all();

        // Get only items from `posts_tags` that is on `tags`
        $filtered_posts_tags = $posts_tags->filter(function($post_tag, $key) use ($tags){
                return $tags->contains($post_tag->tag_id);
        });

        // Convert `posts_tags` collection to `posts`
        $posts = $filtered_posts_tags->map(function($post_tag, $key){
                return $post_tag->post; // via `belongsTo` method
        });

        $posts = $posts->unique()->sortByDesc('created_at');

        if ($limit) {
            $posts = $posts->slice(0, $limit);
        }

        $posts = $posts->all();

        return $posts;
    }

}
