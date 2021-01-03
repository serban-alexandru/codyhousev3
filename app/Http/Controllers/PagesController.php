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
        $data['page_title'] = $post->title . ' - Saigon Finest';

        return view('site1.pages.blog', $data);
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

    public function posts(Request $request)
    {
        $q = $request->input('q');

        $posts = Post::where(
            [
                'is_published' => true,
                'is_deleted'   => false
            ]
        )
        ->orderBy('created_at', 'desc')
        ;

        if($request->has('q')){
            $posts->where('title', 'LIKE', '%' . $q . '%')
            ->orWhere('description', 'LIKE', '%' . $q . '%');
        }

        $posts = $posts->get();
        $page_title = $q ?? 'Posts'; // If there's no search query -> set title to `Posts`

        // Set view data
        $data['page_title'] = $page_title;
        $data['posts']      = $posts;
        $data['q']          = $q;
        $data['request']    = $request;

        return view('pages.post-archive', $data);
    }

    public function tags(Request $request, $tag_query = null)
    {

        // If tag is not found -> return 404 | Not Found
        if (!$tag_query) {
            abort(404);
        }

        $posts = Post::getByTagNames([$tag_query]);

        $data['page_title'] = $tag_query;
        $data['posts']      = $posts;


        $data['page_title'] = $tag_query;
        $data['posts']      = $posts;

        return view('pages.tag-archive', $data);
    }

    public function tagCategories(Request $request, $tag_category_query = null)
    {
        // If tag category is not found -> return 404 | Not Found
        if (!$tag_category_query) {
            abort(404);
        }

        $posts = Post::getByTagCategoryName($tag_category_query);


        $data['page_title'] = $tag_category_query;
        $data['posts']      = $posts;


        $data['page_title'] = $tag_category_query;
        $data['posts']      = $posts;

        return view('pages.category-archive', $data);
    }

    public function searches(Request $request)
    {
        $data = [];

        return view('pages.search-archive', $data);
    }

}
