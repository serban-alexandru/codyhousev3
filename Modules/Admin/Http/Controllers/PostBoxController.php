<?php

namespace Modules\Admin\Http\Controllers;

use Arr, Str, Image, File, Imagick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Modules\Post\Entities\{ PostSetting, Post, PostsTag, PostsMeta };
use Modules\Page\Entities\Page;
use Modules\Tag\Entities\{Tag, TagCategory};

class PostBoxController extends Controller
{
  public function index() {
      // Get all tag categories.
      $tag_categories = TagCategory::all();

      // Get all tags.
      $tags_by_category = array();
      $tags = Tag::where('published', true)->orderBy('name', 'asc')->get();
      foreach($tags as $tag) {
          if (!isset($tags_by_category[$tag->tag_category_id]))
              $tags_by_category[$tag->tag_category_id] = array();
          $tags_by_category[$tag->tag_category_id][] = $tag->name;
      }
      $tags_by_category = json_encode($tags_by_category);

      return view('admin::index', compact('tag_categories', 'tags_by_category'));
  }

  public function ajaxLoadBox( $type ) {
      $response = [
          'status' => true
      ];

      if ( $type == 'post' ) {
          // Get all tag categories.
          $tag_categories = TagCategory::all();

          $response['box_template'] = view( 'postbox.templates.post', compact( 'tag_categories' ) )->render();
      } else if ( $type == 'gif' ) {
          // Get all tag categories.
          $tag_categories = TagCategory::all();

          $response['box_template'] = view( 'postbox.templates.gif', compact( 'tag_categories' ) )->render();
      } else {
          $response['box_template'] = view( 'postbox.templates.' . $type )->render();
      }

      return json_encode($response);
  }

  /**
   * Store a newly created resource in storage.
   * @param Request $request
   * @return Renderable
   */
  public function store(Request $request) {
    $box_type = $request->input('type');

    switch($box_type) {
      case 'post':
        return $this->createPost($request);
        break;
      case 'gif':
        return $this->createGif($request);
        break;
      case 'page':
        return $this->createPage($request);
      default:
        $alert = [
          'message' => 'Something went wrong!',
          'class'   => 'alert--failed',
        ];

        return redirect()->back()->with('alert', $alert);      
    }
  }

  /**
   * Store a newly created post in storage.
   * @param Request $request
   * @return Renderable
   */
  public function createPost(Request $request) {
    $this->validate($request, [
      'title' => 'required|max:255',
    ]);

    if($request->has('thumbnail')) {
      $settings_width = 40;
      $settings_height = 40;

      if(!is_null($posts_settings = PostSetting::where( 'post_type', 'post' )->first())){
        $settings_width = $posts_settings->medium_width;
        $settings_height = $posts_settings->medium_height;
      }

      $post_image_path = storage_path() . '/app/public/posts';

      // Ensure that original, and thumbnail folder exists
      File::ensureDirectoryExists($post_image_path . '/original');
      File::ensureDirectoryExists($post_image_path . '/thumbnail');

      // Save thumbnail image in file system
      $thumbnail = $request->file('thumbnail')->store('public/posts/original');
      $thumbnail_name = Arr::last(explode('/', $thumbnail));

      $thumbnail_medium = Image::make($request->file('thumbnail'));
      $thumbnail_medium->resize($settings_width, $settings_height, function($constraint){
        $constraint->aspectRatio();
      });
      $thumbnail_medium_name = 'thumbnailcrop' . Str::random(27) . '.' . Arr::last(explode('.', $thumbnail));
      $thumbnail_medium->save($post_image_path . '/thumbnail/' . $thumbnail_medium_name);
    }

    // Generate slug
    $slug                = Str::slug(strip_tags($request->input('title')), '-');
    $post_with_same_slug = Post::firstWhere('slug', $slug);

    if ($post_with_same_slug) {
      $duplicated_slugs = Post::select('slug')->where('slug', 'like', $slug . '%')->orderBy('slug', 'desc')->get();
      $slug = getNewSlug($slug, $duplicated_slugs);
    }

    $post = Post::create([
      'user_id'          => auth()->user()->id,
      'title'            => strip_tags($request->input('title')),
      'slug'             => $slug,
      'description'      => $request->input('description'),
      'thumbnail'        => ($request->has('thumbnail')) ? $thumbnail_name : NULL,
      'thumbnail_medium' => ($request->has('thumbnail')) ? $thumbnail_medium_name : NULL,
      'tags'             => ($request->has('tags')) ? implode(',', $request->input('tags')) : NULL,
      'post_type'        => 'post',
      'status'           => $request->input('status')
    ]);

    if ( $request->input('page_title') ) {
      PostsMeta::setMetaData( $post->id, 'seo_page_title', $request->input('page_title') );
    }

    $tag_categories = TagCategory::all();

    foreach ($tag_categories as $key => $tag_category) {
      if ($request->has('tag_category_' . $tag_category->id)) {
        $tags_input = $request->input('tag_category_' . $tag_category->id);

        foreach ($tags_input as $key => $tag_input) {
          $tag = Tag::firstWhere('name', $tag_input);

          // If tag doesn't exist yet, create it
          if (!$tag) {
            $tag                  = new Tag;
            $tag->name            = $tag_input;
            $tag->tag_category_id = $tag_category->id;
            $tag->published       = true;
            $tag->save();
          }

          // Insert posts_tag
          $posts_tag          = new PostsTag;
          $posts_tag->post_id = $post->id;
          $posts_tag->tag_id  = $tag->id;

          $posts_tag->save();
        }
      }
    }

    $alert = [
      'message' => 'Post has been created!',
      'class'   => 'alert--success',
      'type'    => 'post',
    ];

    return redirect()->back()->with('alert', $alert);
  }

  /**
   * Store a newly created post in storage.
   * @param Request $request
   * @return Renderable
   */
  public function createGif(Request $request) {
    $this->validate($request, [
      'title' => 'required|max:255',
    ]);

    if($request->has('thumbnail')) {
      $settings_width = 40;
      $settings_height = 40;

      if(!is_null($posts_settings = PostSetting::where( 'post_type', 'gif' )->first())){
        $settings_width = $posts_settings->medium_width;
        $settings_height = $posts_settings->medium_height;
      }

      $gif_path = storage_path() . '/app/public/gifs';

      // Ensure that original, and thumbnail folder exists
      File::ensureDirectoryExists($gif_path . '/original');
      File::ensureDirectoryExists($gif_path . '/thumbnail');

      // Save orignal image to file system
      $thumbnail = request()->file('thumbnail')->store('public/gifs/original');
      $thumbnail_name = Arr::last(explode('/', $thumbnail));

      // Save thumbnail (medium) image to file system
      $thumbnail_medium = new Imagick($gif_path . '/original/' . $thumbnail_name);
      $thumbnail_medium = $thumbnail_medium->coalesceImages();
      do {
        $thumbnail_medium->resizeImage( $settings_width, $settings_height, Imagick::FILTER_BOX, 1, true );
      } while ( $thumbnail_medium->nextImage());

      $thumbnail_medium = $thumbnail_medium->deconstructImages();
      $thumbnail_medium_name = 'thumbnailcrop' . Str::random(27) . '.' . Arr::last(explode('.', $thumbnail));
      $thumbnail_medium->writeImages($gif_path . '/thumbnail/' . $thumbnail_medium_name, true);
    }

    // Generate slug
    $slug               = Str::slug(strip_tags($request->input('title')), '-');
    $gif_with_same_slug = Post::firstWhere('slug', $slug);

    if ($gif_with_same_slug) {
      $duplicated_slugs = Post::select('slug')->where('slug', 'like', $slug . '%')->orderBy('slug', 'desc')->get();
      $slug = getNewSlug($slug, $duplicated_slugs);
    }

    $gif = Post::create([
      'user_id'          => auth()->user()->id,
      'title'            => strip_tags($request->input('title')),
      'slug'             => $slug,
      'description'      => $request->input('description'),
      'thumbnail'        => ($request->has('thumbnail')) ? $thumbnail_name : NULL,
      'thumbnail_medium' => ($request->has('thumbnail')) ? $thumbnail_medium_name : NULL,
      'tags'             => ($request->has('tags')) ? implode(',', $request->input('tags')) : NULL,
      'post_type'        => 'gif',
      'status'           => $request->input('status')
    ]);

    if ( $request->input('page_title') ) {
      PostsMeta::setMetaData( $gif->id, 'seo_page_title', $request->input('page_title') );
    }

    $tag_categories = TagCategory::all();

    foreach ($tag_categories as $key => $tag_category) {
      if ($request->has('tag_category_' . $tag_category->id)) {
        $tags_input = $request->input('tag_category_' . $tag_category->id);

        foreach ($tags_input as $key => $tag_input) {
          $tag = Tag::firstWhere('name', $tag_input);

          // If tag doesn't exist yet, create it
          if (!$tag) {
            $tag                  = new Tag;
            $tag->name            = $tag_input;
            $tag->tag_category_id = $tag_category->id;
            $tag->published       = true;
            $tag->save();
          }

          // Insert posts_tag
          $gifs_tag          = new PostsTag;
          $gifs_tag->post_id = $gif->id;
          $gifs_tag->tag_id  = $tag->id;

          $gifs_tag->save();
        }
      }
    }

    $alert = [
      'message' => 'Gif has been created!',
      'class'   => 'alert--success',
      'type'    => 'gif',
    ];

    return redirect()->back()->with('alert', $alert);
  }

  /**
   * Store a newly created resource in storage.
   * @param Request $request
   * @return Renderable
   */
  public function createPage(Request $request) {
    $this->validate($request, [
      'title' => 'required|max:255',
    ]);

    // Generate slug
    $slug                = Str::slug(strip_tags($request->input('title')), '-');
    $page_with_same_slug = Page::firstWhere('slug', $slug);

    if ($page_with_same_slug) {
      $duplicated_slugs = Page::select('slug')->where('slug', 'like', $slug . '%')->orderBy('slug', 'desc')->get();
      $slug = getNewSlug($slug, $duplicated_slugs);
    }

    $is_published = $request->input('is_published') ? 1 : 0;
    $is_pending = 0;

    $page = Page::create([
      'user_id'          => auth()->user()->id,
      'title'            => strip_tags($request->input('title')),
      'slug'             => $slug,
      'description'      => $request->input('description'),
      'seo_page_title'   => $request->input('page_title') ?: NULL,
      'is_pending'       => $is_pending,
      'is_published'     => $is_published
    ]);

    $alert = [
      'message' => 'Page has been created!',
      'class'   => 'alert--success',
      'type'    => 'page',
    ];

    return redirect()->back()->with('alert', $alert);
  }  
}
