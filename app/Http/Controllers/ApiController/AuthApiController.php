<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Requests\LoginApiRequest;
use App\Http\Resources\UserResource;
use App\Models\Citizen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends ApiController
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
            'nik' => ['required', 'min:16'],
            'phone_number' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        $nik = $request->nik;
        $password = Hash::make($request->password);
        $phone = $request->phone_number;

        $citizen = Citizen::where('nik', $nik)->first();

        if ($citizen == null) {
            $message = "Data Penduduk Tidak Ditemukan!";
            return $this->errorResponse(compact('message'), 404);
        }

        $username = $this->generateUsername($citizen->full_name);
        $email = "";
        $citizen_id = $citizen->id;

        $user = User::create(compact('username', 'email', 'citizen_id', 'password', 'phone'));

        if ($user == null) {
            dd($user->getRelations());
        }

        $message = "Registrasi User Berhasil!";
        $data = new UserResource($user);
        return $this->successResponse(compact('data', 'message'), 201);
    }

    /**
     * @param string $word
     * @param string $separator
     * @return string
     */
    private function generateUsername(string $word, string $separator = '.'): string
    {
        $words = explode(' ', $this->string_filter(trim($word), " "));
        $username = implode($separator, [$words[0], $words[1]]);
        return strtolower($username);
    }

}
