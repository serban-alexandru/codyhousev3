<?php

namespace Modules\Post\Http\Controllers;

use Arr;
use Illuminate\Http\Request;
use Modules\Post\Entities\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $posts = Post::leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->select([
                'posts.id',
                'title',
                'posts.created_at as created_at',
                'thumbnail',
                'users.name as name'
            ]);

        if(request()->has('postsearch')){
            $posts->where('title', 'LIKE', '%' . request('postsearch') . '%')
            ->orWhere('users.name', 'LIKE', '%' . request('postsearch') . '%');
        }

        $posts = (request()->has('is_trashed'))
            ? $posts->where('is_deleted', 1)
            : $posts->where('is_deleted', 0);

        if(request()->has('is_draft')){
            $posts = $posts->where('is_published', 0);
        }

        $posts = $posts->get();

        $posts_published_count = Post::where('is_deleted', 0)->where('is_published', 1)->count();
        $posts_draft_count = Post::where('is_deleted', 0)->where('is_published', 0)->count();
        $posts_deleted_count = Post::where('is_deleted', 1)->count();

        return view('post::index', compact('posts', 'posts_published_count', 'posts_draft_count', 'posts_deleted_count'));
    }

    public function settings()
    {
        return view('post::layouts.settings');
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
            $path = request()->file('thumbnail')->store('public/posts/images');
        }
        
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => request('title'),
            'description' => htmlentities(request('description')) ?: NULL,
            'thumbnail' => (request()->has('thumbnail')) ? Arr::last(explode('/', $path)) : NULL,
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

        $data['title'] = $post->title;
        $data['description'] = html_entity_decode($post->description);
        $data['thumbnail'] = asset("storage/posts/images/{$post->thumbnail}");
        $data['page_title'] = $post->seo_page_title;
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
            $path = request()->file('thumbnail')->store('public/posts/images');
        }

        $post->update([
            'title' => request('title'),
            'description' => htmlentities(request('description')) ?: NULL,
            'thumbnail' => (request()->has('thumbnail')) ? Arr::last(explode('/', $path)) : $post->thumbnail,
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
        return view('post::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
