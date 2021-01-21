<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Modules\Post\Entities\Post;
use Modules\Post\Entities\PostsTag;
use Modules\Users\Entities\User;
use Modules\Tag\Entities\Tag;
use Modules\Tag\Entities\TagCategory;

class PagesController extends Controller
{

	protected $post_per_load = 20;

	public function index()
	{
		$posts = DB::table('posts')
			->select(['id', 'title', 'seo_page_title', 'thumbnail', 'thumbnail_medium'])
			->where('is_published', 1)
			->where('is_deleted', 0)
			->orderBy('created_at', 'desc')
			->paginate($this->post_per_load);

		return view('site1.index', compact('posts'));
	}

	public function showPost($slug, $id)
	{
		$post = Post::findOrFail($id);

		return view('site1.pages.post', compact('post'));
    }

    public function post($locale, $slug)
    {

        $post = Post::firstWhere('slug', $slug);

        if (!$post) {
            abort(404);
        }

        $data['post']       = $post;
        $data['page_title'] = $post->title;

        return view('post::templates.post-template', $data);
    }

    public function profile($username = null)
    {
        $user = ($username) ? User::where('username', $username)->first()
                : auth()->user();

        if (!$user) {
            abort(403);
        }

        $posts = $user->posts()->where('is_published', true)->latest()->get();

        $data['user']  = $user;
        $data['posts'] = $posts;

        return view('site1.pages.profile', $data);
    }
}
