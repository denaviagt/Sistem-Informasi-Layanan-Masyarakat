<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Resources\ServiceCategoryResource;
use App\Models\ServiceCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServiceCategoryApiController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $data = ServiceCategoryResource::collection(ServiceCategory::all());
        $message = "List of Service Categories";

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
        $serviceCategories = ServiceCategory::find($id);
        if ($serviceCategories == null) {
            $message = "Detail Service Category Not Found";
            return $this->errorResponse(compact('message'), 404);
        }
        $data = new ServiceCategoryResource($serviceCategories);
        $message = "List of Service Categories";

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

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function requirements($id)
    {
        $serviceCategories = ServiceCategory::find($id);
        if ($serviceCategories == null) {
            $message = "Detail Service Category Not Found";
            return $this->errorResponse(compact('message'), 404);
        }
        $data = $serviceCategories->requirement;
        $message = "List of Service Categories";

        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function procedures($id)
    {
        $serviceCategories = ServiceCategory::find($id);
        if ($serviceCategories == null) {
            $message = "Detail Service Category Not Found";
            return $this->errorResponse(compact('message'), 404);
        }
        $data = $serviceCategories->procedure;
        $message = "List of Service Procedures";

        return $this->successResponse(compact('data', 'message'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function files($id)
    {
        return response()->json([
            'message' => 'Village Category ' . $id . ' Files',
            'data' => []
        ]);
    }
}
