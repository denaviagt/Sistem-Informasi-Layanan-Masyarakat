<?php

namespace App\Http\Controllers\ApiController;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserApiController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
        $data = $data->citizen;

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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
