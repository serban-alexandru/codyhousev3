<?php

namespace App\View\Components;

use Illuminate\View\Component;


class EditorjsBlock extends Component
{
    public $html;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data = null, $excerpt = false)
    {
        if (!$data) {
            return;
        }

        $excerpt = ($excerpt == true) ? true : false;

        $data   = json_decode($data);
        $html   = $excerpt ? $this->getExcerptHTML($data) : '';

        $this->html = $html;
    }

    public function getExcerptHTML($data)
    {
        if (isset($data->blocks)) {
            $blocks = $data->blocks;

            foreach ($blocks as $key => $block) {
                if ($block->type == 'paragraph') {
                    // Return only the first paragraph content
                    return $this->getParagraph($block->data);
                }
            }
        }

        return '';

    }

    public function getParagraph($block_data)
    {
        if (!$block_data) {
            return;
        }

        $html = '
            <p>' . $block_data->text . '</p>
        ';

        return $html;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return view('components.editorjs-block');
    }
}
