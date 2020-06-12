<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Faker\Factory as Faker;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        // Generate fake users using Faker
        $faker = Faker::create();
        $users = collect([]);

        for ($i = 0; $i < 10; $i++) {
            $fakeUser = [
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'description' => $faker->realText(200),
                'country' => $faker->country,
                'date' => $faker->date(), 
            ];

            $users->push((object)$fakeUser);
        }

        return view('admin::pages.users')->with('users', $users);
    }

    /**
     * Get random text generated using Faker.
     *
     * @param \Illuminate\Http\Request
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function randomText(Request $request)
    {
        $faker = Faker::create();

        $text = "<h2>{$request->tab}</h2>";
        $text .= $faker->realText(1000);


        return response()->json([
            'text' => $text,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
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
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
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
