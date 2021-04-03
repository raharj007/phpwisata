<?php

use Illuminate\Support\Facades\Route;

Route::get('/db/connection', [\App\Http\Controllers\ConnectionController::class, 'connection']);
