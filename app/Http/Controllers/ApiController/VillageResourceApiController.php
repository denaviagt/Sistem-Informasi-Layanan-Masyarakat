<?php

namespace App\Http\Controllers\ApiController;

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
        return response()->json([
            'data' => []
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        return response()->json([
            'message' => 'Village Resource ' . $id
        ]);
    }
}
