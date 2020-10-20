<?php

namespace Modules\Tag\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use DB;

use Modules\Tag\Entities\Tag;
use Modules\Tag\Entities\TagCategory;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        // Get query strings
        $q     = $request->input('q');
        $limit = $request->input('limit') ? $request->input('limit') : 25;
        $sort  = $request->input('sort') ? $request->input('sort') : 'id';
        $order = $request->input('order') ? $request->input('order') : 'desc';

        // Get tag categories from db
        $tag_categories = TagCategory::all();

        // Get tags from db
        $tags = DB::table('tags')
            ->select(
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
        //
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
}
