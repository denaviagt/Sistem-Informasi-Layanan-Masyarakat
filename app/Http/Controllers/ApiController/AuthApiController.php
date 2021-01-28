<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginApiRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{

    public function login(LoginApiRequest $request)
    {
        $request->validated();

        $credentials = $request->only('username', 'password');

        if (!auth('webapi')->attempt($credentials)) {
            return response()->json([
                'error' => 'Your credentials are invalid'
            ], 401);
        }

        $currentUser = auth('webapi')->user();

        $userResource = new UserResource($currentUser);
        return $userResource
            ->additional([
                'relations' => [
                    'citizen' => $currentUser->citizen
                ]
            ]);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'min:5'],
            'password' => ['required', 'min:8'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
//        $user->remember_token = Str::random(60);

        if ($user->save()) {
            dd($user);
            return (new UserResource($user))
                ->additional([
                    'meta' => [
//                    'token' => $user->remember_token
                    ]
                ]);
        } else {
            dd($user->getRelations());
        }
    }

}
