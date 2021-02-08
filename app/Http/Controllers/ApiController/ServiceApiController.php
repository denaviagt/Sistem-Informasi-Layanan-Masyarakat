<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Resources\ServiceFileResource;
use App\Models\Citizen;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceFile;
use App\Models\ServiceRequirement;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ServiceApiController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $data = Service::all();

        return $this->successResponse(compact('data'));
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
     * Display a listing of the resource.
     *
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function upload($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'requirement_file' => 'required|max:5120',
            'requirement_id' => 'required',
        ]);

        if ($validator->fails()) {
            $message = $validator->messages()->first();

            return $this->errorResponse(compact('message'), 422);
        }

        if (($service = Service::find($id)) == null) {
            $message = "Data service tidak ditemukan";

            return $this->errorResponse(compact('message'), 422);
        }

        $category = ServiceCategory::find($service->service_category_id);

        $requirement_file = $request->file('requirement_file');
        $requirement_id = $request->requirement_id;

        $requirement = ServiceRequirement::find($requirement_id);
        if (!isset($requirement)) {
            $message = "Service Requirement Not Found!";

            return $this->errorResponse(compact('message'), 422);
        }

        $uploadFolder = 'assets/serviceFile/';
        $fileExtension = $requirement_file->getClientOriginalExtension();
        $serviceRequirementName = strtolower(
            $this->string_filter(
                implode(".", [
                    'category', $category->id,
                    'service', $service->id,
                    $requirement->terms,
                    $requirement_file->getFilename()
                ]), "_"
            )
        );

        $fileName = implode(".", [$serviceRequirementName, $fileExtension]);
        $imageUploadPath = $requirement_file->move(public_path($uploadFolder), $fileName);

        if ($imageUploadPath === false || !isset($imageUploadPath)) {
            $message = "Gagal upload file!";

            return $this->errorResponse(compact('message'), 500);
        }

        $data = ServiceFile::create([
            'file_url' => $fileName,
            'status' => "unverified",
            'service_id' => $id,
            'service_requirement_id' => $requirement_id
        ]);

        $data = new ServiceFileResource($data);
        $message = "Berhasil upload file!";

        return $this->successResponse(compact('data', 'message'));
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
