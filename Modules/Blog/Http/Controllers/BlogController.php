<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;

use Modules\Blog\Entities\Blog;
use Modules\Users\Entities\User;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $bladeTemplate = $request->ajax() ? 'blog::partials.table' : 'blog::index';

        $q         = $request->input('q');
        $user      = $request->input('user');
        $limit     = $request->input('limit') ? $request->input('limit') : 25;
        $sort      = $request->input('sort') ? $request->input('sort') : 'id';
        $order     = $request->input('order') ? $request->input('order') : 'desc';

        // work around for status
        $statusOrder = ($order == 'asc') ? 'desc' : 'asc';

        $blogs = Blog::
            select('blogs.*', 'blogs.title as title', 'blogs.description as description', 'blogs.image as image');

        // if search query is not null
        if ($q != null) {
            $blogs = $blogs->where('blogs.title', 'LIKE', '%' . $q . '%')
                ->orWhere ( 'blogs.description', 'LIKE', '%' . $q . '%' )
                ->orWhere ( 'blogs.image', 'LIKE', '%' . $q . '%' );
        }

        // if role is set
        if ($user) {
            $blogs = $blogs->where('users.username', $user);
        }


        $blogs = $blogs->paginate($limit);

        $availableLimit = ['25', '50', '100', '150', '200'];

        // counters
        $allBlogsCount       = Blog::where([
            ['id', '>', 0]
        ])->count();

        return view($bladeTemplate,
            compact('blogs', 'q', 'user', 'limit', 'availableLimit', 'sort', 'order', 'allBlogsCount')
        );
        // return view('blog::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blog::forms.add-blog');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title'     => ['required', 'string', 'max:255'],
            'description'    => ['required', 'text', 'max:255'],
            'image' => ['required', 'string', 'max:255'],
            'thumbnail' => ['required', 'string', 'max:255'],
        ]);

        // get inputs
        $title            = $request->input('title');
        $description           = $request->input('description');
        $image        = $request->input('image');
        $selectedUsername = $request->input('user');

        // save updated user
        $blog = new Blog;
        $blog->title     = $title;
        $blog->description    = $description;
        $blog->image = $image;

        $selectedUser = User::where('key', $selectedUsername)->first();

        // $user->permission = $permission;

        $saved = $blog->save();

        $response = [
            'status'  => 'success',
            'message' => 'Blog has been created.',
            'clear'   => true,
        ];

        if (!$saved) {
            $response = [
                'status'  => 'error',
                'message' => 'Failed to add user. Please try again.',
            ];
        }

        return response()->json($response);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        // $roles = DB::table('roles')->orderBy('id', 'desc')->get();

        if (!$blog) {
            return redirect('admin/blog')->with('responseMessage', 'Blog not found.');
        }

        return view('blog::forms.edit-blog');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
