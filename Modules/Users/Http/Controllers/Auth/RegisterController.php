<?php

namespace Modules\Users\Http\Controllers\Auth;

use Modules\Users\Providers\RouteServiceProvider;
use Modules\Users\Entities\User;
use Modules\Users\Entities\Role;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username'              => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
            'email'                 => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'full_name'             => ['required', 'string', 'max:255'],
            'password'              => ['required', 'string', 'min:8', 'confirmed'],
            'terms'                 => ['accepted']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $permission = Role::where('key', 'registered')->first()->permission;

        return User::create([
            'username'   => $data['username'],
            'email'      => $data['email'],
            'name'       => $data['full_name'],
            'password'   => Hash::make($data['password']),
            'permission' => $permission
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());

        Auth::loginUsingId($user->id);

        return response()->json([
            'status'  => 'success',
            'message' => 'Registration successful.',
            'data'    => [
                'redirect_to' => url('site1/home')
            ]
        ]);
    }

    public function showRegistrationForm()
    {
        return redirect('/');
    }

    public function ajaxShowForm(Request $request)
    {
        return view('users::forms.signup');
    }
}
