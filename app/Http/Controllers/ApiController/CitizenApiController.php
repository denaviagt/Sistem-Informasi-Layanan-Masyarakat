<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Resources\CitizenResource;
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
            $data = Citizen::where($where, 'LIKE', "%$clause%")->get();
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

        $data = Citizen::where($where, 'LIKE', "%$clause%")->first();

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
        $citizen = Citizen::find($id);

        if (!isset($citizen)){
            $message = "Citizen Not Found!";
            return $this->errorResponse(compact('message'), 404);
        }

        $message = 'Detail Of Citizen ' . $citizen->full_name;
        $data = new CitizenResource($citizen);

        return $this->successResponse(compact('data', 'message'));
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
        $citizen = Citizen::find($id);

        if (!isset($citizen)){
            $message = "Citizen Not Found!";
            return $this->errorResponse(compact( 'message'), 404);
        }

        $citizen->nik = $request->nik ?? $citizen->nik;
        $citizen->kk = $request->kk ?? $citizen->kk;
        $citizen->full_name = $request->full_name ?? $citizen->full_name;
        $citizen->religion = $request->religion ?? $citizen->religion;
        $citizen->married_status = $request->married_status ?? $citizen->married_status;
        $citizen->last_education = $request->last_education ?? $citizen->last_education;
        $citizen->blood_type = $request->blood_type ?? $citizen->blood_type;
        $citizen->profession = $request->profession ?? $citizen->profession;
        $citizen->pob = $request->pob ?? $citizen->pob;
        $citizen->dob = $request->dob ?? $citizen->dob;
        $citizen->address = $request->address ?? $citizen->address;
        $citizen->status = $request->status ?? $citizen->status;

        if (!$citizen->save()){
            $message = "Failed To Update Citizen!";
            return $this->errorResponse(compact( 'message'), 409);
        }

        $data = new CitizenResource($citizen);

        $message = "Success Update Citizen Data";

        if (!$citizen->wasChanged()){
            $message = "Nothings Changed With Citizen!";
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
