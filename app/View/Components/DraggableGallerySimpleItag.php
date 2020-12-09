<?php

namespace App\View\Components;

use Illuminate\View\Component;

use Modules\Post\Entities\Post;

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
            $posts = Post::getByTagNames($tags, $limit);
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
