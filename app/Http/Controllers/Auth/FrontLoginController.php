<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Citizen;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $maxAttempts = 3;
    protected $decayMinutes = 2;

    public function __construct()
    {
        $this->middleware('guest:user')->except('postLogout');
    }

    public function getLogin()
    {
        return view('auth.user.login');
    }

    public function getRegister()
    {
        return view('auth.user.register');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:5'
        ]);

        $field = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials = [
            $field => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (auth()->guard('user')->attempt($credentials)) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return redirect()->intended();
        } else {
            $this->incrementLoginAttempts($request);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'username' => 'required|min:5',
            'password' => 'required',
            'nik' => 'required',
            'phone' => 'required',
        ]);

        $citizen = Citizen::where('nik', $request->nik)->first();
        if ($citizen == null)
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["nik"=>"NIK Belum terdaftar!"]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'citizen_id' => $citizen->id,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        return redirect()
            ->route("user.login");
    }

    public function postLogout()
    {
        auth()->guard('user')->logout();
        session()->flush();

        return redirect()->route('user.login');
    }
}
