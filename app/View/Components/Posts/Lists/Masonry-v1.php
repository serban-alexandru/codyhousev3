<?php

namespace App\View\Components\Posts\Lists;

use Illuminate\View\Component;

class Masonry extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.posts.lists.masonry-v1');
    }
}
