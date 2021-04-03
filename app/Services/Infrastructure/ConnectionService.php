<?php


namespace App\Services\Infrastructure;


use Illuminate\Support\Facades\DB;

class ConnectionService implements ConnectionServiceInterface
{
    /**
     * @return object
     */
    public function dbHasActiveConnection(): object
    {
        // TODO: Implement dbHasActiveConnection() method.
        try {
            $conn = DB::connection();
            $conn->getPdo();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
        return (object)['dbstatus' => 'connected', 'dbname' => $conn->getDatabaseName()];
    }

}
