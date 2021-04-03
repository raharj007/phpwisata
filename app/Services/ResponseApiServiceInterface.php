<?php


namespace App\Services;


use Illuminate\Http\JsonResponse;

interface ResponseApiServiceInterface
{
    /**
     * @param $data
     * @param $message
     * @return JsonResponse
     */
    public function success($data, $message = 'OK'): JsonResponse;

    /**
     * @param $message
     * @return JsonResponse
     */
    public function error($message): JsonResponse;
}
