<?php

namespace App\Http\Controllers;

use App\Services\Infrastructure\ConnectionServiceInterface;
use App\Services\ResponseApiService;
use App\Services\ResponseApiServiceInterface;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    /**
     * @var ResponseApiServiceInterface
     */
    protected $response;

    public function __construct(ResponseApiServiceInterface $response)
    {
        $this->response = $response;
    }

    public function connection(ConnectionServiceInterface $service) {
        try {
            $conn = $service->dbHasActiveConnection();
        } catch (\Exception $exception) {
            return $this->response->error($exception->getMessage());
        }
        return $this->response->success($conn);
    }
}
