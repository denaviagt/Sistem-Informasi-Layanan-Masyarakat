<?php

namespace App\Http\Controllers\ApiController;

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
        return response()->json([
            'message' => 'Village Category ',
            'data' => []
        ]);
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
        return response()->json([
            'message' => 'Village Category ' . $id . ' Requirements',
            'data' => []
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function procedures($id)
    {
        return response()->json([
            'message' => 'Village Category ' . $id . ' Procedures',
            'data' => []
        ]);
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
