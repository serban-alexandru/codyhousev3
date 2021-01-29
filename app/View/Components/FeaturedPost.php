<?php

namespace App\View\Components;

use Illuminate\View\Component;

use Modules\Post\Entities\Post;

class FeaturedPost extends Component
{
    public $featured_post;
    public $featured_list;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($limit = 4)
    {
        $featured_post = Post::where(
            [
                'is_published' => true,
                'is_pending'   => false,
                'is_deleted'   => false
            ]
        )->latest()->first();

        $featured_list = Post::where(
            [
                'is_published' => true,
                'is_pending'   => false,
                'is_deleted'   => false
            ]
        )
        ->orderBy('created_at', 'desc')
        ->limit($limit)
        ->offset(1)
        ;

        $featured_list = $featured_list->get();

        $this->featured_post = $featured_post;
        $this->featured_list = $featured_list;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.posts.lists.featured-post');
    }
}
