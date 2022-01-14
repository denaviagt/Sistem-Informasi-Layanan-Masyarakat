<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontLoginController extends Controller
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth:user')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('user');
    }

    public function username(Request $request)
    {
        $login = $request->input('username');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$field => $login]);
        return $field;
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only(['username', 'password']);

        $attempt = Auth::guard('user')->attempt($credentials, $request->remember);
        dd($attempt);
        if (!$attempt) {
            echo 'Failed';
            return redirect()->back()->withInput($request->only('email', 'password'));
        }

        $currentUser = Auth::guard('user')->user();
        dd($currentUser);
//        $request->session()->regenerate();
//        return redirect()->route();
    }
}
