<?php


namespace App\Services;


use Illuminate\Http\JsonResponse;

class ResponseApiService implements ResponseApiServiceInterface
{
    protected function obj($status = false, $message = '', $data = null) {
        return (object)[
            'status' => $status,
            'messsage' => $message,
            'data' => $data,
        ];
    }

    /**
     * @param $data
     * @param $message
     * @return JsonResponse
     */
    public function success($data, $message = 'OK'): JsonResponse
    {
        // TODO: Implement success() method.
        $obj = $this->obj(true, $message, $data);
        return response()->json($obj, JsonResponse::HTTP_OK);
    }

    /**
     * @param $message
     * @return JsonResponse
     */
    public function error($message): JsonResponse
    {
        // TODO: Implement error() method.
        $obj = $this->obj(false, $message);
        return response()->json($obj, JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    }


}
