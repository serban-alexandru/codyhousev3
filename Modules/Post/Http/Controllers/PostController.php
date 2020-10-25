<?php

namespace Modules\Post\Http\Controllers;

use Arr, Str, Image, File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Post\Entities\{ PostSetting, Post };

class PostController extends Controller
{

    public function index()
    {
        $view = request()->ajax() ? 'post::partials.table' : 'post::index';

        $posts = Post::leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->select([
                'posts.id',
                'title',
                'posts.created_at as created_at',
                'thumbnail',
                'thumbnail_medium',
                'is_deleted',
                'is_published',
                'users.username as username'
            ])->orderBy('created_at', 'desc');

        if(request()->has('postsearch')){
            $posts->where('title', 'LIKE', '%' . request('postsearch') . '%')
            ->orWhere('users.name', 'LIKE', '%' . request('postsearch') . '%');
        }

        $posts = (request()->has('is_trashed'))
            ? $posts->where('is_deleted', 1)
            : $posts->where('is_deleted', 0);

        if(!request()->has('is_trashed')){
            $posts = (request()->has('is_draft'))
                ? $posts->where('is_published', 0)
                : $posts->where('is_published', 1);
        }

        $limit = request('limit') ? request('limit') : 25;

        $posts = $posts->paginate($limit);

        $posts_published_count = Post::where('is_deleted', 0)->where('is_published', 1)->count();
        $posts_draft_count = Post::where('is_deleted', 0)->where('is_published', 0)->count();
        $posts_deleted_count = Post::where('is_deleted', 1)->count();

        $availableLimit = ['25', '50', '100', '150', '200'];

        $image_width = '40';
        $image_height = '40';
        $posts_settings = PostSetting::first();
        if(!is_null($posts_settings)){
            $image_width = $posts_settings->medium_width;
            $image_height = $posts_settings->medium_height;
        }

        return view($view, compact(
            'posts', 'posts_published_count', 'posts_draft_count', 'posts_deleted_count',
            'availableLimit', 'limit', 'image_width', 'image_height'
            )
        );
    }

    public function settings()
    {
        $posts_published_count = Post::where('is_deleted', 0)->where('is_published', 1)->count();
        $posts_draft_count = Post::where('is_deleted', 0)->where('is_published', 0)->count();
        $posts_deleted_count = Post::where('is_deleted', 1)->count();

        $posts_settings = PostSetting::first();

        return view('post::layouts.settings', compact(
            'posts_published_count', 'posts_draft_count', 'posts_deleted_count', 'posts_settings'
            )
        );
    }

    /**
     * Store the posts settings.
     * @return view
     */
    public function settingsStore()
    {
        return $this->createOrUpdateSettings('create', 'created');
    }

    /**
     * Update the posts settings.
     * @return view
     */
    public function settingsUpdate()
    {
        return $this->createOrUpdateSettings('update', 'updated');
    }

    /**
     * Store or update posts settings.
     * @return view
     */
    public function createOrUpdateSettings($method, $message)
    {
        $this->validate(request(), [
            'medium_width' => 'required|max:255',
            'medium_height' => 'required|max:255',
            // 'image_setting' => 'in:maintain,crop'
        ]);

        if($method == 'create'){
            PostSetting::create(request()->except(['_token']));
        } else{
            $posts_settings = PostSetting::first();
            $posts_settings->update(request()->except(['_token']));
        }

        return redirect('/admin/posts/settings')->with("posts-settings-alert", "Settings has been $message!");
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('post::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store()
    {

        $this->validate(request(), [
            'title' => 'required|max:255',
        ]);

        if(request()->has('thumbnail')){
            $settings_width = 40;
            $settings_height = 40;

            if(!is_null($posts_settings = PostSetting::first())){
                $settings_width = $posts_settings->medium_width;
                $settings_height = $posts_settings->medium_height;
            }

            $post_image_path = storage_path() . '/app/public/posts';

            // Ensure that original, and thumbnail folder exists
            File::ensureDirectoryExists($post_image_path . '/original');
            File::ensureDirectoryExists($post_image_path . '/thumbnail');
            
            // Save thumbnail image in file system
            $thumbnail = request()->file('thumbnail')->store('public/posts/original');
            $thumbnail_name = Arr::last(explode('/', $thumbnail));

            $thumbnail_medium = Image::make(request()->file('thumbnail'));
            $thumbnail_medium->resize($settings_width, $settings_height, function($constraint){
                $constraint->aspectRatio();
            });
            $thumbnail_medium_name = 'thumbnailcrop' . Str::random(27) . '.' . Arr::last(explode('.', $thumbnail));
            $thumbnail_medium->save($post_image_path . '/thumbnail/' . $thumbnail_medium_name);
        }
        
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => request('title'),
            'description' => htmlentities(request('description')) ?: NULL,
            'thumbnail' => (request()->has('thumbnail')) ? $thumbnail_name : NULL,
            'thumbnail_medium' => (request()->has('thumbnail')) ? $thumbnail_medium_name : NULL,
            'seo_page_title' => request('page_title') ?: NULL,
            'tags' => (request()->has('tags')) ? implode(',', request('tags')) : NULL,
            'is_published' => request('is_published')
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Post has been created!'
        ]);
    }

    public function fetchDataAjax($id)
    {
        $post = Post::find($id);

        if(!$post){
            return response()->json([
                'message' => 'Post does not exists.'
            ]);
        }

        $data = [];

        $data['id'] = $post->id;
        $data['title'] = $post->title;
        $data['description'] = html_entity_decode($post->description);
        $data['thumbnail'] = asset("storage/posts/original/{$post->thumbnail}");
        $data['page_title'] = $post->seo_page_title;
        $data['is_published'] = $post->is_published;
        $data['is_deleted'] = $post->is_deleted;
        $data['tags'] = ($post->tags) ? '<option selected>' . implode('</option><option selected>', explode(',', $post->tags)) . '</option>' : '';


        return $data;
    }

    public function ajaxUpdate()
    {
        $post = Post::find(request('id'));

        if(!$post){
            return response()->json([
                'message' => 'Post does not exists.'
            ]);
        }

        if(request()->has('thumbnail')){
            $settings_width = 40;
            $settings_height = 40;

            if(!is_null($posts_settings = PostSetting::first())){
                $settings_width = $posts_settings->medium_width;
                $settings_height = $posts_settings->medium_height;
            }

            $post_image_path = storage_path() . '/app/public/posts';

            // Ensure that original, and thumbnail folder exists
            File::ensureDirectoryExists($post_image_path . '/original');
            File::ensureDirectoryExists($post_image_path . '/thumbnail');

            // Save orignal image to file system
            $thumbnail = request()->file('thumbnail')->store('public/posts/original');
            $thumbnail_name = Arr::last(explode('/', $thumbnail));

            // Save thumbnail (medium) image to file system
            $thumbnail_medium = Image::make(request()->file('thumbnail'));
            $thumbnail_medium->resize($settings_width, $settings_height, function($constraint){
                $constraint->aspectRatio();
            });
            $thumbnail_medium_name = 'thumbnailcrop' . Str::random(27) . '.' . Arr::last(explode('.', $thumbnail));
            $thumbnail_medium->save($post_image_path . '/thumbnail/' . $thumbnail_medium_name);
        
            // Delete thumbnail if exists.
            if(file_exists($post->getThumbnail())){
                unlink($post->getThumbnail());
            }

            if(file_exists($post->getThumbnail('medium'))){
                unlink($post->getThumbnail('medium'));
            }
        }

        $post->update([
            'title' => request('title'),
            'description' => htmlentities(request('description')) ?: NULL,
            'thumbnail' => (request()->has('thumbnail')) ? $thumbnail_name : $post->thumbnail,
            'thumbnail_medium' => (request()->has('thumbnail')) ? $thumbnail_medium_name : $post->thumbnail_medium,
            'seo_page_title' => request('page_title') ?: NULL,
            'tags' => (request()->has('tags')) ? implode(',', request('tags')) : NULL
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Post has been updated!'
        ]);
    }

    public function delete()
    {
        $post = Post::find(request('post_id'));

        if(!$post){
            return response()->json([
                'message' => 'Post does not exists.'
            ]);
        }

        $post->update(['is_deleted' => 1]);

        return redirect('admin/posts');
    }

    public function deleteMultiple()
    {
        $this->validate(request(), [
            'post_ids' => 'required|array'
        ]);

        Post::whereIn('id', request('post_ids'))->update(['is_deleted' => 1]);

        return response()->json([
            'status' => true,
            'message' => 'Posts has been deleted!'
        ]);
    }

    public function emptyTrash()
    {
        Post::where('is_deleted', 1)->delete();

        return redirect('admin/posts');
    }

    public function restore($id)
    {
        $post = Post::find($id);

        if(!$post){
            return response()->json([
                'message' => 'Post does not exists.'
            ]);
        }

        $post->update(['is_deleted' => 0]);

        return redirect('admin/posts');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('post::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('post::forms');
    }

    public function makePostDraft($id)
    {
        $this->updateIsPublished($id, 0);

        return redirect('/admin/posts');
    }

    public function makePostPublish($id)
    {
        $this->updateIsPublished($id, 1);

        return redirect('/admin/posts');
    }

    public function updateIsPublished($id, $value)
    {
        $post = Post::find($id);

        if(!$post){
            throw new Exception("Post does not exists.");
        }

        $post->update(['is_published' => $value]);
    }
}
