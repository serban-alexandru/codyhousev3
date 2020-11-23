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
        $html   = $excerpt ? $this->getExcerptHTML($data) : $this->getHTML($data);

        $this->html = $html;
    }

    public function getHTML($data)
    {
        $html = '';

        if (isset($data->blocks)) {
            $blocks = $data->blocks;

            foreach ($blocks as $key => $block) {
                switch ($block->type) {
                    case 'paragraph':
                        $html .= $this->getParagraph($block->data);
                        break;
                    case 'header':
                        $html .= $this->getHeader($block->data);
                        break;
                    case 'delimiter':
                        $html .= $this->getHorizontalLine($block->data);
                        break;
                    case 'image':
                        $html .= $this->getImage($block->data);
                        break;
                    case 'list';
                        $html .= $this->getOrderedList($block->data);
                        break;
                    case 'checklist':
                        $html .= $this->getCheckList($block->data);
                        break;
                    case 'raw':
                        $html .= $this->getRawHTML($block->data);
                        break;
                    default:
                        $html .= '';
                        break;
                }
            }
        }

        return $html;
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

    public function getHeader($block_data)
    {
        if (!$block_data) {
            return;
        }

        $html = '
            <h' . $block_data->level . '>' . $block_data->text . '</h' . $block_data->level . '>
        ';

        return $html;
    }

    public function getHorizontalLine($block_data)
    {
        if (!$block_data) {
            return;
        }

        $html = '<hr />';

        return $html;
    }

    public function getImage($block_data)
    {
        if (!$block_data) {
            return;
        }

        $html = '
            <figure class="margin-bottom-md">
                <img src="' . $block_data->file->url . '" />
                <figcaption>' . $block_data->caption . '</figcaption>
            </figure>
        ';

        return $html;
    }

    public function getOrderedList($block_data)
    {
        if (!$block_data) {
            return;
        }

        $html = '<ol>';
            foreach ($block_data->items as $key => $item) {
                $html .= '<li>' . $item . '</li>';
            }
        $html .= '</ol>';

        return $html;
    }

    public function getCheckList($block_data)
    {
        if (!$block_data) {
            return;
        }

        $html = '<ul>';
            foreach ($block_data->items as $key => $item) {
                $line_through_class = ($item->checked) ? 'text-line-through' : '';

                $html .= '<li class="' . $line_through_class . '">' . $item->text . '</li>';
            }
        $html .= '</ul>';

        return $html;
    }

    public function getRawHTML($block_data)
    {
        if (!$block_data) {
            return;
        }

        $html = $block_data->html;

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
