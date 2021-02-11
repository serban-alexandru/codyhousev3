<?php

namespace App\View\Components\Posts\Single;

use Illuminate\View\Component;

use Modules\Post\Entities\Post;

class SinglePost extends Component
{
    public $post;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $post = Post::where(
            [
                'id' => $id,
                'is_published' => true,
                'is_pending'   => false,
                'is_deleted'   => false
            ]
        )->first();

        $post['description'] = Post::parseContent($post['description']);

        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.posts.single.single-post');
    }
}
