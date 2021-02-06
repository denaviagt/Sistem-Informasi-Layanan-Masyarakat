<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Resources\VillageInfoResource;
use App\Models\VillageInfo;
use Illuminate\Http\JsonResponse;

class VillageInfoApiController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $data = VillageInfoResource::collection(VillageInfo::all());
        $message = "List of the Village Info.";
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
        $data = new VillageInfoResource(VillageInfo::find($id));
        if ($data == null) {
            $message = "Village Info not Found";
            return $this->errorResponse(compact('message'), 404);
        }

        $message = "Detail of Village Info " . $data->resource->title;
        return $this->successResponse(compact('data', 'message'));
    }
}
