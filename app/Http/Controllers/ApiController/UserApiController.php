<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Resources\CitizenResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserApiController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $data = User::all();
        $data = UserResource::collection($data);
        $message = "List of User";
        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $data = User::find($id);
        if ($data == null) {
            $message = "User Not Found!";
            return $this->errorResponse(compact('message'), 404);
        }

        $message = "Detail User Of " . $data->username;
        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function citizen($id)
    {
        $data = User::find($id);
        if ($data == null) {
            $message = "User Not Found!";
            return $this->errorResponse(compact('message'), 404);
        }

        $message = "Detail Citizen By User " . $data->username;
        $data = new CitizenResource($data->citizen);

        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function dusun($id)
    {
        $data = User::find($id);
        if ($data == null) {
            $message = "User Not Found!";
            return $this->errorResponse(compact('message'), 404);
        }

        $message = "Dusun Citizen By User " . $data->username;
        $data = $data->citizen->dusun;

        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function showCitizen($id)
    {
        return response()->json([
            'message' => 'Detail user ' . $id,
            'data' => null
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!isset($user)){
            $message = "User Id Not Found!";
            return $this->errorResponse(compact( 'message'), 404);
        }

        $user->username = $request->username ?? $user->username;
        $user->email = $request->email ?? $user->email;
        $user->citizen_id = $request->citizen_id ?? $user->citizen_id;
        $user->password = $user->password = isset($request->password) ? Hash::make($request->password) : $user->password;
        $user->phone = $request->phone ?? $user->phone;

        if (!$user->save()){
            $message = "Failed To Update User!";
            return $this->errorResponse(compact( 'message'), 409);
        }

        $data = new UserResource($user);

        $message = "Success Update User Data";
        if (!$user->wasChanged()){
            $message = "Nothings Changed With User!";
        }

        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
