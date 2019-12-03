<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Check user's role and redirect user based on their role
     * @return 
     */
    public function redirectTo()
    {
        if(auth()->user()->type == 1)
        {
            return 'administrador/index';
        } 

        return 'usuario/index';

        // if(auth()->user()->type == 1 && strcmp(Route::currentRouteName(), 'administrador.login'))
        // {
        //     return 'administrador/index';
        // }elseif(auth()->user()->type == 2 && strcmp(Route::currentRouteName(), 'usuario.login'))
        // {
        //     return 'usuario/index';
        // } 

        // return '/';
    }
}
