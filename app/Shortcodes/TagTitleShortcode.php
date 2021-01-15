<?php

namespace App\Shortcodes;
use Modules\Tag\Entities\Tag;

class TagTitleShortcode {

  public function register($shortcode, $content, $compiler, $name, $viewData)
  {
    $tag = Tag::find($shortcode->id);

    if (!$tag) {
      return '';
    }

    return sprintf('%s', $tag->name);
  }
}
