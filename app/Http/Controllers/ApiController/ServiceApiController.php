<?php

namespace App\Http\Controllers\ApiController;

use App\Models\Citizen;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServiceApiController extends ApiController
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
     * @return JsonResponse
     */
    public function store($id, Request $request)
    {
        $request->validate([
            'user_id' => ['required'],
            'description' => ['required'],
            'nik' => ['required'],
        ]);

        $nik = $request->nik;
        $description = $request->description;
        $user_id = $request->user_id;
        $date = $request->date ?? now();
        $status = $request->status ?? "sent";
        $service_category_id = $id;

        $citizen_id = null;

        $citizen = Citizen::where('nik', $nik)->first();

        if ($citizen == null) {
            $message = "Data Penduduk Tidak Ditemukan!";
            return $this->errorResponse(compact('message'), 404);
        }

        $citizen_id = $citizen->id;

        if (User::find($user_id) == null) {
            $message = "Data User Tidak Ditemukan!";
            return $this->errorResponse(compact('message'), 404);
        }

        $data = Service::create(compact(
            'description', 'user_id', 'date', 'status', 'citizen_id', 'service_category_id'
        ));
        $message = "List of Service Categories";

        return $this->successResponse(compact('data', 'message'), 201);
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
}
