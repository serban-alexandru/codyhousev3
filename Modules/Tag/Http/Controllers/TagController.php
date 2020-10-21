<?php

namespace Modules\Tag\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use Modules\Tag\Entities\Tag;
use Modules\Tag\Entities\TagCategory;
use Modules\Users\Entities\User;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        // Get query strings
        $q          = $request->input('q');
        $is_trashed = $request->input('is_trashed');
        $limit      = $request->input('limit') ? $request->input('limit') : 25;
        $sort       = $request->input('sort') ? $request->input('sort') : 'id';
        $order      = $request->input('order') ? $request->input('order') : 'desc';

        // Get tag categories from db
        $tag_categories = TagCategory::all();

        // Get tags from db
        $tags = Tag::select(
                'tags.*',
                'tags.id',
                'tags.created_at',
                'tags.updated_at',
                'tag_categories.id as category_id',
                'tag_categories.name as category_name',
            )
            ->join('tag_categories', 'tag_categories.id', '=', 'tags.tag_category_id')
        ;

        // Set sorting and order
        $tags = $tags->orderBy($sort, $order);

        // Check if tag is deleted
        $tags = $is_trashed ? $tags->where('is_trashed', true) : $tags->where('is_trashed', false);

        // If search query is not null then apply where clauses
        if ($q != null) {
            $tags = $tags
                    ->where('tags.name', 'LIKE', '%' . $q . '%')
                    ->orWhere( 'tags.description', 'LIKE', '%' . $q . '%' )
                    ->orWhere( 'tags.seo_title', 'LIKE', '%' . $q . '%' )
            ;
        }

        // Paginate
        $tags = $tags->paginate($limit);

        // Prepare data to view
        $data['q']              = $q;   // Return back query to be used on search input
        $data['tags']           = $tags;
        $data['tag_categories'] = $tag_categories;

        return view('tag::index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('tag::create');
    }

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
            'message' => 'Failed to save tag. Please try again.',
        ];

        // validate data
        $this->validate($request,[
            'tag_name'        => ['required', 'alpha_num', 'max:255'],
            'tag_category_id' => ['required', 'exists:tag_categories,id'],
        ]);

        // Insert tag to db table
        $tag                  = new Tag;
        $tag->name            = $request->input('tag_name');
        $tag->description     = $request->input('tag_description');
        $tag->tag_category_id = $request->input('tag_category_id');
        $tag->seo_title       = $request->input('tag_seo_title');
        $tag->published       = $request->boolean('tag_publish');

        $saved = $tag->save();

        if ($saved) {
            $response = [
                'status'      => 'success',
                'message'     => 'Tag has been saved.',
                'data'        => $tag,
                'tag_publish' => $request->boolean('tag_publish')
            ];
        }

        // if user uploads avatar
        if ($request->file('tag_image') !== null) {

            // set tag image
            $tag->addMediaFromRequest('tag_image')->toMediaCollection('images');
        }

        return response()->json($response);

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('tag::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('tag::edit');
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

    /**
     * Update is_trashed to 1 from tag table.
     * @param int $id
     * @return Response
     */
    public function trash($id)
    {
        $tag = Tag::find($id);
        $responseMessage = 'Something went wrong. Please try again.';

        // If tag not found
        if (!$tag) {
            return back()->with('responseMessage', 'Tag not found.');
        }

        $tag->is_trashed = true;
        $deleted         = $tag->save();

        if ($deleted) {
            $responseMessage = 'Tag "'. $tag->name . '" has been moved to trash.';
        }else{
            $responseMessage = 'Failed to move tag "'. $tag->name . '" to trash. Please try again.';
        }

        return back()->with('responseMessage', $responseMessage);
    }
}
