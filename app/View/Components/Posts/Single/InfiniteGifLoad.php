<?php

namespace App\View\Components\Posts\Single;

use Illuminate\View\Component;

use Modules\Post\Entities\Post;

class InfiniteGifLoad extends Component
{
    public $gif; // The current gif.
    public $tag_pills; // Tags for current post.

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $gif = Post::where(
            [
                'id'           => $id,
                'post_type'    => 'gif',
                'is_published' => true,
                'is_pending'   => false,
                'is_deleted'   => false,
                'is_rejected'  => false,
            ]
        )->first();

        if ($gif) {
            $gif['description'] = Post::parseContent($gif['description']);
            $gif['seo_title'] = $gif['title'] . ' | [sitetitle]';
            $gif['url'] = 'gif/' . $gif['slug'];

            $tag_pills = $gif->getTagNames();

            $this->gif = $gif;
            $this->tag_pills = $tag_pills;
        } else {
            $this->gif = null;
            $this->tag_pills = null;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.posts.single.infinite-gif-load');
    }
}
