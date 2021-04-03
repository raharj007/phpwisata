<?php


namespace App\Services\Infrastructure;


interface ConnectionServiceInterface
{
    /**
     * @return object
     */
    public function dbHasActiveConnection(): object;
}
