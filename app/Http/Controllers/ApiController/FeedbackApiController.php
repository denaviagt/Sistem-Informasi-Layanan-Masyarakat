<?php

namespace App\Http\Controllers\ApiController;

use App\Models\Dusun;
use App\Models\Feedback;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FeedbackApiController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $data = Feedback::all();
        $message = "List of Feedback!";

        return $this->successResponse(compact('data', 'message'), 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'feedback' => ['required'],
            'location' => ['required'],
            'user_id' => ['required'],
        ]);

        $feedback = $request->feedback;
        $location = $request->location;
        $user_id = $request->user_id;
        $is_important = $request->is_important ?? false;
        $is_anonim = $request->is_anonim ?? false;
        $is_read = $request->is_read ?? false;
        $date = $request->date ?? now();
        $dusunWhere = isset($request->feedback_dusun_id) ? "id" : (isset($request->dusun_name) ? "dusun_name" : null);
        $dusunClause = $request->feedback_dusun_id ?? $request->dusun_name;
        $feedback_dusun_id = null;

        if (!isset($dusunWhere)) {
            $message = "The field dusun_name or feedback_dusun_id is required!";
            $errors = [
                [
                    'source' => 'dusun_name',
                    'message' => $message
                ],
                [
                    'source' => 'feedback_dusun_id',
                    'message' => $message
                ]
            ];
            return $this->errorResponse(compact('message', 'errors'), 422);
        }

        if (($dusun = Dusun::where($dusunWhere, $dusunClause)->first()) == null) {
            $message = "Dusun Not Found!";
            return $this->errorResponse(compact('message'), 404);
        }
        $feedback_dusun_id = $dusun->id;

        $data = Feedback::create(
            compact(
                'is_important',
                'is_anonim',
                'is_read',
                'feedback',
                'location',
                'date',
                'user_id',
                'feedback_dusun_id'
            ));

        if (!$feedback) {
            $message = "Gagal Mengirimkan Aduan!";
            return $this->errorResponse(compact('message'), 422);
        }

        $message = "Berhasil Mengirimkan Aduan!";

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
