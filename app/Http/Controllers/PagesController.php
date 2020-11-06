<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Modules\Post\Entities\Post;

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
        $page_title = $q ?? 'Posts';

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

    public function categories(Request $request)
    {
        $data = [];

        return view('pages.category-archive', $data);
    }

    public function searches(Request $request)
    {
        $data = [];

        return view('pages.search-archive', $data);
    }

}
