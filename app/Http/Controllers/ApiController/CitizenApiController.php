<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Citizen;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CitizenApiController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $message = "List Of Citizen!";
        $data = Citizen::all();
        $data = CitizenResource::collection($data);

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
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function find(Request $request)
    {
        $where = $request->by;
        $clause = $request->search;

        if (!empty($where) && !empty($clause)) {
            $data = Citizen::where($where, $clause)->get();
        } else {
            $data = Citizen::all();
        }

        $message = "Citizen Search Result!";
        $data = CitizenResource::collection($data);

        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function single(Request $request)
    {
        $where = $request->by;
        $clause = $request->search;

        if (empty($where)) {
            $message = "The by field is required";
            return $this->errorResponse(compact('message'), 422);
        } elseif (empty($clause)) {
            $message = "The search field is required";
            return $this->errorResponse(compact('message'), 422);
        }

        $data = Citizen::where($where, $clause)->first();

        if (!isset($data)) {
            $message = "Citizen Search By " . strtoupper($where) . " Not Found!";
            return $this->errorResponse(compact('message'), 404);
        }

        $message = "Citizen By " . strtoupper($where) . " Result!";
        $data = new CitizenResource($data);

        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show($id)
    {
        //
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
