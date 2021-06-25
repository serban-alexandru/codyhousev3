<?php
if (! function_exists('getNewSlug')) {
  function getNewSlug($slug, $posts) {
    $max_number = 0;
    foreach($posts as $post) {
      $slug_snippet = str_replace($slug, "", $post->slug);

      if (!empty($slug_snippet) && substr($slug_snippet, 0, 1) === '-') {
        $slug_snippet = substr($slug_snippet, 1);
        if (ctype_digit($slug_snippet)) {
          $max_number = max($max_number, (int)$slug_snippet);
        }
      }
    }

    if ($max_number === 0) $max_number = 2;
    else $max_number++;

    return $slug . '-' . $max_number;
  }
}
