<?php

namespace App\View\Components;

use Illuminate\View\Component;

use Modules\Post\Entities\Post;
use Modules\Post\Entities\PostsTag;
use Modules\Tag\Entities\Tag;

class DraggableGallerySimpleItag extends Component
{
    public $posts;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tags = [], $limit = 5)
    {
        $posts = [];

        if ($tags) {
            $tags_collection = Tag::whereIn('name', $tags)->get();

            // Get middle table `posts_tags`
            $posts_tags = PostsTag::all();


            // Get only items from `posts_tags` that is on `tags`
            $filtered_posts_tags = $posts_tags->filter(function($post_tag, $key) use ($tags_collection){
                return $tags_collection->contains($post_tag->tag_id);
            });


            // Convert `posts_tags` collection to `posts`
            $posts = $filtered_posts_tags->map(function($post_tag, $key){
                    return $post_tag->post; // via `belongsTo` method
            });

            $posts = $posts->unique()->sortByDesc('created_at')->where('is_published', true);

            if ($limit) {
                $posts = $posts->slice(0, $limit);
            }

            $posts = $posts->all();

        }else{
            // Else if not set, then just get latest posts
            $posts = Post::where(
                [
                    'is_published' => true,
                    'is_deleted'   => false
                ]
            )
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->offset(0)
            ;

            $posts = $posts->get();
        }

        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.draggable-gallery-simple-itag');
    }
}
