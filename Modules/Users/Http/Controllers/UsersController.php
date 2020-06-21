<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Users\Entities\User;
use Modules\Users\Entities\Role;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $bladeTemplate = $request->ajax() ? 'users::partials.table' : 'users::index';

        $q         = $request->input('q');
        $status    = $request->input('status');
        $isTrashed = $request->input('is_trashed');
        $role      = $request->input('role');
        $limit     = $request->input('limit') ? $request->input('limit') : 25;
        $sort      = $request->input('sort') ? $request->input('sort') : 'id';
        $order     = $request->input('order') ? $request->input('order') : 'desc';

        // work around for status
        $statusOrder = ($order == 'asc') ? 'desc' : 'asc';

        $users = User::
            select('users.*', 'users.permission as status', 'roles.name as role', 'roles.key as roleKey')
            ->leftJoin('roles', 'roles.permission', '=', 'users.permission');

        $users = ($sort == 'status')
                ? $users->orderBy($sort, $statusOrder)
                : $users->orderBy($sort, $order);

        // check if user is deleted
        $users = $isTrashed ? $users->where('is_trashed', 1) : $users->where('is_trashed', 0);

        // if search query is not null
        if ($q != null) {
            $users = $users->where('users.name', 'LIKE', '%' . $q . '%')
                ->orWhere ( 'users.username', 'LIKE', '%' . $q . '%' )
                ->orWhere ( 'users.email', 'LIKE', '%' . $q . '%' );
        }

        // if status is suspended
        if ($status === 'suspended') {
            $users = $users->where('users.permission', '<', 1);
        }else{
            $users = $users->where('users.permission', '>', 0);
        }

        // if role is set
        if ($role) {
            $users = $users->where('roles.key', $role);
        }


        $users = $users->paginate($limit);

        $availableLimit = ['25', '50', '100', '150', '200'];

        // counters
        $allUsersCount       = User::where([
            ['is_trashed', '=', 0],
            ['permission', '>', 0]
        ])->count();

        $suspendedUsersCount = User::where([
            ['permission', '<', 1],
            ['is_trashed', '=', 0],
        ])->count();

        $trashedUsersCount   = User::where('is_trashed', '=', 1)->count();

        $subscriberPermission = Role::where('key', 'subscriber')->first()->permission;
        $editorPermission     = Role::where('key', 'editor')->first()->permission;
        $adminPermission      = Role::where('key', 'admin')->first()->permission;

        $subscriberUsersCount = User::where([
            ['permission', '=', $subscriberPermission],
            ['is_trashed', '=', 0],
        ])->count();

        $editorUsersCount     = User::where([
            ['permission', '=', $editorPermission],
            ['is_trashed', '=', 0],
        ])->count();

        $adminUsersCount      = User::where([
            ['permission', '=', $adminPermission],
            ['is_trashed', '=', 0],
        ])->count();

        return view($bladeTemplate,
            compact('users', 'q', 'limit', 'availableLimit', 'sort', 'order', 'allUsersCount', 'suspendedUsersCount', 'trashedUsersCount', 'subscriberUsersCount', 'editorUsersCount', 'adminUsersCount')
        );

        // return view('users::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('users::create');
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
        return view('users::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('users::edit');
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
     * Activate user account
     * Set `permission` to `previous_permission`
     * Set `previous_permission` to `permission`
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate($id)
    {
        $user = User::find($id);
        $responseMessage = 'Something went wrong. Please try again.';

        // if user not found
        if (!$user) {
            return redirect('admin/users')->with('responseMessage', 'User not found.');
        }

        // if user trying to activate is currently logged in admin
        if ($user->id == auth()->user()->id) {
            $responseMessage = 'You cannot change the status of your account.';
        }else{
            // if user account was already activated
            if ($user->permission > 0) {
                $responseMessage = 'User '. $user->email. ' was previously activated.';
            }else{
                $previousPermission = $user->permission;
                $newPermission = $user->previous_permission;

                $user->previous_permission = $previousPermission;
                $user->permission          = $newPermission;
                $saved                     = $user->save();

                if ($saved) {
                    $responseMessage = 'User account for '. $user->email. ' has been activated.';
                }else{
                    $responseMessage = 'Failed to activate the account of '. $user->email. '. Please try again.';
                }
            }

        }

        return redirect('admin/users')->with('responseMessage', $responseMessage);
    }

    /**
     * Suspend user account
     * Set `permission` to 0
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function suspend($id)
    {
        $user = User::find($id);
        $responseMessage = 'Something went wrong. Please try again.';

        // if user not found
        if (!$user) {
            return redirect('admin/users')->with('responseMessage', 'User not found.');
        }

        // if user trying to suspend is currently logged in admin
        if ($user->id == auth()->user()->id) {
            $responseMessage = 'You cannot suspend your logged in account.';
        }else{
            // if user account was already suspended
            if ($user->permission == 0) {
                $responseMessage = 'User '. $user->email. ' was previously suspended.';
            }else{
                $previousPermission = $user->permission;
                $newPermission = 0;

                $user->previous_permission = $previousPermission;
                $user->permission          = $newPermission;
                $saved                     = $user->save();

                if ($saved) {
                    $responseMessage = 'User account for '. $user->email. ' has been suspended.';
                }else{
                    $responseMessage = 'Failed to suspend the account of '. $user->email. '. Please try again.';
                }
            }

        }

        return redirect('admin/users')->with('responseMessage', $responseMessage);
    }

    /**
     * Update is_trashed to 1 from storage.
     * @param int $id
     * @return Response
     */
    public function trash($id)
    {
        $user = User::find($id);
        $responseMessage = 'Something went wrong. Please try again.';

        // if user not found
        if (!$user) {
            return redirect('admin/users')->with('responseMessage', 'User not found.');
        }

        // if user trying to delete is currently logged in admin
        if ($user->id == auth()->user()->id) {
            $responseMessage = 'You cannot delete your logged in account.';
        }else{

            $email            = $user->email;
            $user->is_trashed = 1;

            $deleted = $user->save();

            if ($deleted) {
                $responseMessage = 'User account of '. $email . ' has been deleted.';
            }else{
                $responseMessage = 'Failed to delete user '. $email . '. Please try again.';
            }

        }

        return redirect('admin/users')->with('responseMessage', $responseMessage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $responseMessage = 'Something went wrong. Please try again.';

        // if user not found
        if (!$user) {
            return redirect('admin/users')->with('responseMessage', 'User not found.');
        }

        // if user trying to delete is currently logged in admin
        if ($user->id == auth()->user()->id) {
            $responseMessage = 'You cannot permanently delete your logged in account.';
        }else{
            $email = $user->email;

            $deleted = $user->delete();

            if ($deleted) {
                $responseMessage = 'User account of '. $email . ' has been permanently deleted.';
            }else{
                $responseMessage = 'Failed to permanently delete user '. $email . '. Please try again.';
            }

        }

        return redirect('admin/users')->with('responseMessage', $responseMessage);
    }

    /**
     * Empty trash
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyTrash()
    {
        $users = User::where('is_trashed', 1);

        $deleted = $users->delete();

        $responseMessage = 'Trash has been empty.';

        return redirect('admin/users')->with('responseMessage', $responseMessage);
    }
}
