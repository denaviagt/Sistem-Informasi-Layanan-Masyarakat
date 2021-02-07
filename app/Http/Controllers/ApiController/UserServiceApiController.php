<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Resources\UserServiceResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder;

class UserServiceApiController extends ApiController
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
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function history($id)
    {
        $data = User::find($id);
        if ($data == null) {
            $message = "User Not Found!";
            return $this->errorResponse(compact('message'), 404);
        }
        $message = "Detail User Of " . $data->username;
        $data = $data->service->whereIn(
            'status', ['accepted', 'rejected', 'processing', 'completed', 'sent']
        );
        $data = UserServiceResource::collection($data);

        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function submission($id)
    {
        $data = User::find($id);
        if ($data == null) {
            $message = "User Not Found!";
            return $this->errorResponse(compact('message'), 404);
        }
        $message = "Detail User Of " . $data->username;
        $data = $data->service->whereIn(
            'status',  ['processing', 'sent']
        );
        $data = UserServiceResource::collection($data);

        return $this->successResponse(compact('data', 'message'));
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
