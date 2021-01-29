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
