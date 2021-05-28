<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Page\Entities\Page;
use Modules\Post\Entities\Post;

class SingleViewController extends Controller
{
  public function singleView($locale, $slug)
  {
    // Get Page by slug
    $page = Page::firstWhere('slug', $slug);

    if ( isset( $page ) ) {
      $data['page']       = $page;
      $data['page_title'] = $page->title;

      return view('templates.layouts.page', $data);
    }

    // Get Post by slug
    $post = Post::firstWhere('slug', $slug);

    if ( !$post ) {
      abort(404);
    }

    $post['description'] = Post::parseContent($post['description']);

    $data['post']       = $post;
    $data['locale']     = $locale;
    $data['page_title'] = $post->title;

    return view('templates.layouts.post', $data);
  }

  public function singleViewbyTheme($theme, $locale, $slug)
  {
    // Get Page by slug.
    $page = Page::firstWhere('slug', $slug);

    if ( $page ) {
      $data['page']       = $page;
      $data['page_title'] = $page->title;
      $data['theme']      = $theme;

      return view('page::templates.page-template-v1', $data);
    }

    // Get Post by slug.
    $post = Post::firstWhere('slug', $slug);

    if ( !$post ) {
      abort(404);
    }

    $post['description'] = Post::parseContent($post['description']);
    
    $data['post']       = $post;
    $data['page_title'] = $post->title;
    $data['theme']      = $theme;

    return view('post::templates.post-template-v1', $data);
  }
}
