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

}
