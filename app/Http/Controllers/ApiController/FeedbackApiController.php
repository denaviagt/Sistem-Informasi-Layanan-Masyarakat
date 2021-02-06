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
    public function store(Request $request)
    {
        $isImportant = $request->is_important;
        $isAnonim = $request->is_anonim;
        $isRead = $request->is_read;
        $feedback = $request->feedback;
        $date = $request->date ?? now();
        $userId = $request->user_id;
        $dusunWhere = $request->feedback_dusun_id != null ? "id" : "dusun_name";
        $dusunClause = $request->feedback_dusun_id ?? $request->dusun_name;
        $feedbackDusunId = null;

        if ($dusunWhere == null) {
            $message = "Field dusun_name or feedback_dusun_id required";
            return $this->errorResponse(compact('message'));
        }

        if (($dusun = Dusun::where($dusunWhere, $dusunClause)->first()) == null) {
            $message = "Dusun Not Found!";
            return $this->errorResponse(compact('message'), 404);
        }
        $feedbackDusunId = $dusun->id;

        $feedback = Feedback::create(
            compact(
                'isImportant',
                'isAnonim',
                'isRead',
                'feedback',
                'date',
                'userId',
                'feedbackDusunId'
            ));

        if (!$feedback) {
            $message = "Gagal Mengirimkan Aduan!";
            return $this->errorResponse(compact('message'), 404);
        }

        $data = $feedback->procedure;
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
