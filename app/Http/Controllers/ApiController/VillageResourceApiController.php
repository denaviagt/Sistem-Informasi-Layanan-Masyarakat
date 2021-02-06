<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Resources\VillageResource_Resource;
use App\Models\NaturalResource;
use Illuminate\Http\JsonResponse;

class VillageResourceApiController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $data = VillageResource_Resource::collection(NaturalResource::all());
        $message = "List of Village's Natural Resource";

        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $data = new VillageResource_Resource(NaturalResource::find($id));
        $title = $data != null ? $data->resource->title : "";
        $message = "Detail Village's Natural Resource" . $title;

        if ($data == null) {
            $message = "Village's Natural Resource not found";
            return $this->errorResponse(compact('message'));
        }

        return $this->successResponse(compact('data', 'message'));
    }
}
