<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    public function redirectPath()
    {
        /** 
        *if (auth()->user()->user_type == 'admin') {
        *    return route('admin.dashboard');
       * }
       * if (auth()->user()->user_type == 'user') {
        *    return route('user.dashboard');
       * } return route('index');
        */

        if (auth()->user()->is_superadmin) {
            return route('admin.dashboard');
        }
        if (auth()->user()->is_manager) {
            return route('index');
        }
        if (auth()->user()->is_admin) {
            return route('admin.dashboard');
        }
        if (auth()->user()->is_user) {
            return route('user.my_list');
        }
        if (auth()->user()->is_business) {
            return route('user.my_list');
        }

        return abort(404);
    }

    
}
