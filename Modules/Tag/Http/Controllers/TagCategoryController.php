<?php

namespace Modules\Tag\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Modules\Tag\Entities\TagCategory;

class TagCategoryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

        // Set default response
        $response = [
            'status'  => 'error',
            'message' => 'Failed to save tag category. Please try again.',
        ];

        // validate data
        $this->validate($request,[
            'tag_category_name' => ['required', 'max:255'],
        ]);

        $id       = $request->input('tag_category_id');
        $updating = ($id > 0);

        // Insert or update tag category to db table
        $tag_category       = $updating ? TagCategory::find($id) : new TagCategory;
        $tag_category->name = $request->input('tag_category_name');

        $saved = $tag_category->save();

        if ($saved) {
            $response = [
                'status'        => 'success',
                'message'       => 'Tag category has been saved.',
                'data'          => $tag_category,
            ];
        }

        return response()->json($response);

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

}
