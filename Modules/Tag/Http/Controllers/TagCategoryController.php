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

}
