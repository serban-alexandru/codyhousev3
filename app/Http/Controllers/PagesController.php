<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
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

    public function profile($username = null)
    {
        $user = ($username) ? User::where('username', $username)->first()
                : auth()->user();

        if (!$user) {
            abort(403);
        }

        $posts = $user->posts()->latest()->get();

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

    public function tags(Request $request)
    {
        $data = [];

        return view('pages.tag-archive', $data);
    }

    public function tagCategories(Request $request, $tag_category_query = null)
    {
        $tag_category = TagCategory::where('name', $tag_category_query)->first();

        // If tag category is not found -> return 404 | Not Found
        if (!$tag_category_query || !$tag_category) {
            abort(404);
        }

        // Get tags that use the tag category
        $tags       = Tag::where('tag_category_id', $tag_category->id)->get();

        // Get middle table `posts_tags`
        $posts_tags = PostsTag::all();

        // Get only items from `posts_tags` that is on `tags`
        $filtered_posts_tags = $posts_tags->filter(function($post_tag, $key) use ($tags){
            return $tags->contains($post_tag->tag_id);
        });

        // Convert `posts_tags` collection to `posts`
        $posts = $filtered_posts_tags->map(function($post_tag, $key){
            return $post_tag->post; // via `belongsTo` method
        });

        $posts = $posts->unique()->sortByDesc('created_at');


        $data['page_title'] = $tag_category->name;
        $data['posts']      = $posts;

        return view('pages.category-archive', $data);
    }

    public function searches(Request $request)
    {
        $data = [];

        return view('pages.search-archive', $data);
    }

}
