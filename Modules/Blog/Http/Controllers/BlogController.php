<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;

// use Modules\Users\Entities\User;
// use Modules\Users\Entities\Role;
use Modules\Blog\Entities\Blog;
// use Modules\Blog\Entities\;
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
        // $status    = $request->input('status');
        // $isTrashed = $request->input('is_trashed');
        $role      = $request->input('role');
        $limit     = $request->input('limit') ? $request->input('limit') : 25;
        $sort      = $request->input('sort') ? $request->input('sort') : 'id';
        $order     = $request->input('order') ? $request->input('order') : 'desc';

        // work around for status
        $statusOrder = ($order == 'asc') ? 'desc' : 'asc';

        $blog = Blog::
            select('blog.*', 'blog.title as title', 'blog.description as description', 'blog.image as image');

        // $users = ($sort == 'status')
        //         ? $users->orderBy($sort, $statusOrder)
        //         : $users->orderBy($sort, $order);

        // check if user is deleted
        // $users = $isTrashed ? $users->where('is_trashed', 1) : $users->where('is_trashed', 0);

        // if search query is not null
        if ($q != null) {
            $blog = $blog->where('blog.title', 'LIKE', '%' . $q . '%')
                ->orWhere ( 'blog.description', 'LIKE', '%' . $q . '%' )
                ->orWhere ( 'blog.image', 'LIKE', '%' . $q . '%' );
        }

        // if status is suspended
        // if ($status === 'suspended') {
        //     $users = $users->where('users.permission', '<', 1);
        // }else{
        //     $users = $users->where('users.permission', '>', 0);
        // }

        // if role is set
        if ($role) {
            $blog = $blog->where('roles.key', $role);
        }


        $blog = $blog->paginate($limit);

        $availableLimit = ['25', '50', '100', '150', '200'];

        // counters
        $allBlogsCount       = Blog::where([
            ['id', '>', 0]
        ])->count();

        // $suspendedUsersCount = User::where([
        //     ['permission', '<', 1],
        //     ['is_trashed', '=', 0],
        // ])->count();

        // $trashedUsersCount   = User::where('is_trashed', '=', 1)->count();

        // $subscriberPermission = Role::where('key', 'subscriber')->first()->permission;
        // $editorPermission     = Role::where('key', 'editor')->first()->permission;
        // $adminPermission      = Role::where('key', 'admin')->first()->permission;

        // $subscriberUsersCount = User::where([
        //     ['permission', '=', $subscriberPermission],
        //     ['is_trashed', '=', 0],
        // ])->count();

        // $editorUsersCount     = User::where([
        //     ['permission', '=', $editorPermission],
        //     ['is_trashed', '=', 0],
        // ])->count();

        // $adminUsersCount      = User::where([
        //     ['permission', '=', $adminPermission],
        //     ['is_trashed', '=', 0],
        // ])->count();

        return view($bladeTemplate,
            compact('blog', 'q', 'limit', 'availableLimit', 'sort', 'order', 'allBlogsCount')
        );
        // return view('blog::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blog::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
        return view('blog::edit');
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
