<?php


namespace App\Http\Controllers\ApiController;


use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{

    /**
     * @param mixed $data
     * @param int $status
     * @param array $headers
     * @param int $options
     * @return JsonResponse
     */
    protected function successResponse($data = [], $status = 200, array $headers = [], $options = 0)
    {
        $body = [
            "success" => true,
            "status_code" => $status,
            "message" => "Response sukses!",
        ];

        if (is_array($data)) {
            $body = array_replace($body, $data);
        }else {
            $body = array_replace($body, ['data' => $data]);
        }

        return response()->json(
            $body,
            $status,
            $headers,
            $options
        );
    }

    /**
     * @param mixed $data
     * @param int $status
     * @param array $headers
     * @param int $options
     * @return JsonResponse
     */
    protected function errorResponse($data = null, $status = 400, array $headers = [], $options = 0)
    {
        $body = [
            "success" => false,
            "status_code" => $status,
            "message" => "Response Error!"
        ];

        if (is_array($data)) {
            $body = array_replace($body, $data);
        }else {
            $body = array_replace($body, ['data' => $data]);
        }

        return response()->json(
            $body,
            $status,
            $headers,
            $options
        );
    }
}
