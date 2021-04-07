<?php

namespace App\Shortcodes;
use Modules\Post\Entities\Post;
use Modules\Page\Entities\Page;

class PostTitleShortcode {

  public function register($shortcode, $content, $compiler, $name, $viewData)
  {
    // parse current url: url path should be LOCALE/SLUG in this case
    $url = parse_url(url()->current());
    $paths = explode("/", trim($url['path'], "/"));
    $slug = $paths[count($paths) - 1];
    $locale = $paths[count($paths) - 2];

    // validate $locale
    preg_match('/[a-zA-Z]{2}/', $locale, $matches);
    if (count($matches) > 0 && count($paths) >= 2) {
      // get page by slug
      $page = Page::firstWhere('slug', $slug);

      if ( $page ) {
        return $page->title;
      }

      // get post by slug
      $post = Post::firstWhere('slug', $slug);

      if (!$post) {
        return '';
      }

      return $post->title;
    }

    return '';
  }
}
